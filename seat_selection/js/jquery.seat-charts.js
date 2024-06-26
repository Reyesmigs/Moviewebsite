(function ($) {
	$.fn.seatCharts = function (setup) {
		if (this.data('seatCharts')) {
			return this.data('seatCharts');
		}
		var fn = this,
			seats = {},
			seatIds = [],
			legend,
			settings = {
				animate: false, 
				naming: {
					top: true,
					left: true,
					getId: function (character, row, column) {
						return row + '_' + column;
					},
					getLabel: function (character, row, column) {
						return column;
					}

				},
				legend: {
					node: null,
					items: []
				},
				click: function () {

					if (this.status() == 'available') {
						return 'selected';
					} else if (this.status() == 'selected') {
						return 'available';
					} else {
						return this.style();
					}

				},
				focus: function () {

					if (this.status() == 'available') {
						return 'focused';
					} else {
						return this.style();
					}
				},
				blur: function () {
					return this.status();
				},
				seats: {}

			},
			seat = (function (seatCharts, seatChartsSettings) {
				return function (setup) {
					var fn = this;

					fn.settings = $.extend({
						status: 'available', 
						style: 'available',
						data: seatChartsSettings.seats[setup.character] || {}
					}, setup);

					fn.settings.$node = $('<div></div>');

					fn.settings.$node
						.attr({
							id: fn.settings.id,
							role: 'checkbox',
							'aria-checked': false,
							focusable: true,
							tabIndex: -1 
						})
						.text(fn.settings.label)
						.addClass(['seatCharts-seat', 'seatCharts-cell', 'available'].concat(
							
							fn.settings.classes,
							typeof seatChartsSettings.seats[fn.settings.character] == "undefined" ? [] : seatChartsSettings.seats[fn.settings.character].classes
						).join(' '));

					
					fn.data = function () {
						return fn.settings.data;
					};

					fn.char = function () {
						return fn.settings.character;
					};

					fn.node = function () {
						return fn.settings.$node;
					};

					
					fn.style = function () {

						return arguments.length == 1 ?
							(function (newStyle) {
								var oldStyle = fn.settings.style;

								
								if (newStyle == oldStyle) {
									return oldStyle;
								}

								
								fn.settings.status = newStyle != 'focused' ? newStyle : fn.settings.status;
								fn.settings.$node
									.attr('aria-checked', newStyle == 'selected');

								
								seatChartsSettings.animate ?
									fn.settings.$node.switchClass(oldStyle, newStyle, 200) :
									fn.settings.$node.removeClass(oldStyle).addClass(newStyle);

								return fn.settings.style = newStyle;
							})(arguments[0]) : fn.settings.style;
					};

					
					fn.status = function () {

						return fn.settings.status = arguments.length == 1 ?
							fn.style(arguments[0]) : fn.settings.status;
					};

					(function (seatSettings, character, seat) {
						$.each(['click', 'focus', 'blur'], function (index, callback) {

							fn[callback] = function () {
								if (callback == 'focus') {
									if (seatCharts.attr('aria-activedescendant') !== undefined) {
										seats[seatCharts.attr('aria-activedescendant')].blur();
									}
									seatCharts.attr('aria-activedescendant', seat.settings.id);
									seat.node().focus();
								}

								
								return fn.style(typeof seatSettings[character][callback] === 'function' ?
									seatSettings[character][callback].apply(seat) : seatChartsSettings[callback].apply(seat));
							};

						});
					})(seatChartsSettings.seats, fn.settings.character, fn);

					fn.node()
						.on('click', fn.click)
						.on('mouseenter', fn.focus)
						.on('mouseleave', fn.blur)

						.on('keydown', (function (seat, $seat) {

							return function (e) {

								var $newSeat;

								switch (e.which) {
									case 32:
										e.preventDefault();
										seat.click();
										break;
									case 40:
									case 38:
										e.preventDefault();

										
										$newSeat = (function findAvailable($rows, $seats, $currentRow) {
											var $newRow;


											if (!$rows.index($currentRow) && e.which == 38) {
												$newRow = $rows.last();
											} else if ($rows.index($currentRow) == $rows.length - 1 && e.which == 40) {
												$newRow = $rows.first();
											} else {
												$newRow = $rows.eq(
													$rows.index($currentRow) + (e.which == 38 ? (-1) : (+1))
												);
											}

											$newSeat = $newRow.find('.seatCharts-seat,.seatCharts-space').eq($seats.index($seat));

											return $newSeat.hasClass('seatCharts-space') ?
												findAvailable($rows, $seats, $newRow) : $newSeat;

										})($seat
											.parents('.seatCharts-container')
											.find('.seatCharts-row:not(.seatCharts-header)'),
											$seat
											.parents('.seatCharts-row:first')
											.find('.seatCharts-seat,.seatCharts-space'),
											$seat.parents('.seatCharts-row:not(.seatCharts-header)')
										);

										if (!$newSeat.length) {
											return;
										}

										seat.blur();
										seats[$newSeat.attr('id')].focus();
										$newSeat.focus();

										seatCharts.attr('aria-activedescendant', $newSeat.attr('id'));

										break;
									case 37:
									case 39:
										e.preventDefault();
										
										$newSeat = (function ($seats) {

											if (!$seats.index($seat) && e.which == 37) {
												return $seats.last();
											} else if ($seats.index($seat) == $seats.length - 1 && e.which == 39) {
												return $seats.first();
											} else {
												return $seats.eq($seats.index($seat) + (e.which == 37 ? (-1) : (+1)));
											}

										})($seat
											.parents('.seatCharts-container:first')
											.find('.seatCharts-seat:not(.seatCharts-space)'));

										if (!$newSeat.length) {
											return;
										}

										seat.blur();
										seats[$newSeat.attr('id')].focus();
										$newSeat.focus();

										seatCharts.attr('aria-activedescendant', $newSeat.attr('id'));
										break;
									default:
										break;

								}
							};

						})(fn, fn.node()));
				}
			})(fn, settings);

		fn.addClass('seatCharts-container');
		$.extend(true, settings, setup);
		settings.naming.rows = settings.naming.rows || (function (length) {
			var rows = [];
			for (var i = 1; i <= length; i++) {
				rows.push(i);
			}
			return rows;
		})(settings.map.length);
		settings.naming.columns = settings.naming.columns || (function (length) {
			var columns = [];
			for (var i = 1; i <= length; i++) {
				columns.push(i);
			}
			return columns;
		})(settings.map[0].split('').length);

		if (settings.naming.top) {
			var $headerRow = $('<div></div>')
				.addClass('seatCharts-row seatCharts-header');

			if (settings.naming.left) {
				$headerRow.append($('<div></div>').addClass('seatCharts-cell'));
			}


			$.each(settings.naming.columns, function (index, value) {
				$headerRow.append(
					$('<div></div>')
					.addClass('seatCharts-cell')
					.text(value)
				);
			});
		}
		fn.append($headerRow);
		$.each(settings.map, function (row, characters) {

			var $row = $('<div></div>').addClass('seatCharts-row');

			if (settings.naming.left) {
				$row.append(
					$('<div></div>')
					.addClass('seatCharts-cell seatCharts-space')
					.text(settings.naming.rows[row])
				);
			}

			

			$.each(characters.match(/[a-z_]{1}(\[[0-9a-z_]{0,}(,[0-9a-z_ ]+)?\])?/gi), function (column, characterParams) {
				var matches = characterParams.match(/([a-z_]{1})(\[([0-9a-z_ ,]+)\])?/i),
					character = matches[1],
					params = typeof matches[3] !== 'undefined' ? matches[3].split(',') : [],
					overrideId = params.length ? params[0] : null,
					overrideLabel = params.length === 2 ? params[1] : null;

				$row.append(character != '_' ?
					(function (naming) {

						settings.seats[character] = character in settings.seats ? settings.seats[character] : {};

						var id = overrideId ? overrideId : naming.getId(character, naming.rows[row], naming.columns[column]);
						seats[id] = new seat({
							id: id,
							label: overrideLabel ?
								overrideLabel : naming.getLabel(character, naming.rows[row], naming.columns[column]),
							row: row,
							column: column,
							character: character
						});

						seatIds.push(id);
						return seats[id].node();

					})(settings.naming) :
					$('<div></div>').addClass('seatCharts-cell seatCharts-space')
				);
			});

			fn.append($row);
		});

		settings.legend.items.length ? (function (legend) {
			var $container = (legend.node || $('<div></div').insertAfter(fn))
				.addClass('seatCharts-legend');

			var $ul = $('<ul></ul>')
				.addClass('seatCharts-legendList')
				.appendTo($container);

			$.each(legend.items, function (index, item) {
				$ul.append(
					$('<li></li>')
					.addClass('seatCharts-legendItem')
					.append(
						$('<div></div>')
						.addClass(['seatCharts-seat', 'seatCharts-cell', item[1]].concat(
							settings.classes,
							typeof settings.seats[item[0]] == "undefined" ? [] : settings.seats[item[0]].classes).join(' '))
					)
					.append(
						$('<span></span>')
						.addClass('seatCharts-legendDescription')
						.text(item[2])
					)
				);
			});

			return $container;
		})(settings.legend) : null;

		fn.attr({
			tabIndex: 0
		});
		fn.focus(function () {
			if (fn.attr('aria-activedescendant')) {
				seats[fn.attr('aria-activedescendant')].blur();
			}

			fn.find('.seatCharts-seat:not(.seatCharts-space):first').focus();
			seats[seatIds[0]].focus();

		});

		fn.data('seatCharts', {
			seats: seats,
			seatIds: seatIds,
			status: function () {
				var fn = this;
				return arguments.length == 1 ? fn.seats[arguments[0]].status() : (function (seatsIds, newStatus) {

					return typeof seatsIds == 'string' ? fn.seats[seatsIds].status(newStatus) : (function () {
						$.each(seatsIds, function (index, seatId) {
							fn.seats[seatId].status(newStatus);
						});
					})();
				})(arguments[0], arguments[1]);
			},
			each: function (callback) {
				var fn = this;

				for (var seatId in fn.seats) {
					if (false === callback.call(fn.seats[seatId], seatId)) {
						return seatId; 
					}
				}

				return true;
			},
			node: function () {
				var fn = this;
				return $('#' + fn.seatIds.join(',#'));
			},
			find: function (query) { 
				var fn = this;
				var seatSet = fn.set();
				return query.length == 1 ? (function (character) {
					fn.each(function () {
						if (this.char() == character) {
							seatSet.push(this.settings.id, this);
						}
					});

					return seatSet;
				})(query) : (function () {
					
					return query.indexOf('.') > -1 ? (function () {

						var parts = query.split('.');

						fn.each(function (seatId) {
							if (this.char() == parts[0] && this.status() == parts[1]) {
								seatSet.push(this.settings.id, this);
							}
						});

						return seatSet;
					})() : (function () {
						fn.each(function () {

							if (this.status() == query) {
								seatSet.push(this.settings.id, this);
							}
						});

						return seatSet;
					})();
				})();

			},
			set: function set() { 
				var fn = this;

				return {
					seats: [],
					seatIds: [],
					length: 0,
					status: function () {
						var args = arguments,
							that = this;
						
						return this.length == 1 && args.length == 0 ? this.seats[0].status() : (function () {
							
							$.each(that.seats, function () {
								this.status.apply(this, args);
							});
						})();
					},
					node: function () {
						return fn.node.call(this);
					},
					each: function () {
						return fn.each.call(this, arguments[0]);
					},
					get: function () {
						return fn.get.call(this, arguments[0]);
					},
					find: function () {
						return fn.find.call(this, arguments[0]);
					},
					set: function () {
						return set.call(fn);
					},
					push: function (id, seat) {
						this.seats.push(seat);
						this.seatIds.push(id);
						++this.length;
					}
				};
			},
			get: function (seatsIds) {
				var fn = this;

				return typeof seatsIds == 'string' ?
					fn.seats[seatsIds] : (function () {

						var seatSet = fn.set();

						$.each(seatsIds, function (index, seatId) {
							if (typeof fn.seats[seatId] === 'object') {
								seatSet.push(seatId, fn.seats[seatId]);
							}
						});

						return seatSet;
					})();
			}
		});

		return fn.data('seatCharts');
	}


})(jQuery);