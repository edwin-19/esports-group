!function(e,t,r,a,i,n,s,o,d,l){r(t).ready(function(){function p(){r(".tribe-week-grid-wrapper.tribe-scroller").nanoScroller({paneClass:"scroller-pane",sliderClass:"scroller-slider",contentClass:"scroller-content",iOSNativeScrolling:!0,alwaysVisible:!1,scrollTo:O})}function u(){var e=r(r(".tribe-week-grid-wrapper .tribe-grid-body .column").length>6?".tribe-grid-body .column:eq(5), .tribe-grid-body .column:eq(6), .tribe-grid-body .column:eq(7)":".tribe-grid-body .column:eq(4), .tribe-grid-body .column:eq(5)");e.addClass("tribe-events-right")}function b(){r(".tribe-event-placeholder").each(function(){var e=r(this).attr("data-event-id"),t=parseInt(r("#tribe-events-event-"+e).outerHeight());r(this).height(t)})}function c(){for(var e=r(".tribe-grid-allday"),t=e.find(".vevent"),a=parseInt(r(".tribe-grid-content-wrap .column").width())-8,i=1;i<8;i++)t.hasClass("tribe-dayspan"+i)&&e.find(".tribe-dayspan"+i).children("div").css("width",a*i+(4*(2*i-2)+(i-1))+"px")}function _(e){e.each(function(){var e=r(this),t=e.next(),a={left:"0",width:"65%"},i={right:"0",width:"65%"};if(t.length){var n=t.offset(),s=[n.left,n.left+t.outerWidth()],o=[n.top,n.top+t.outerHeight()],d=e.offset(),l=[d.left,d.left+e.outerWidth()],p=[d.top,d.top+e.outerHeight()];s[0]<l[1]&&s[1]>l[0]&&o[0]<p[1]&&o[1]>p[0]&&(e.is(".overlap-right")?t.css(a).addClass("overlap-left"):e.is(".overlap-left")?t.css(i).addClass("overlap-right"):(e.css(a),t.css(i).addClass("overlap-right")))}})}function v(){var e=r(".tribe-grid-body .tribe-events-mobile-day.column"),t=e.length,a=100/t;e.css("width",a+"%"),r(".tribe-grid-header .tribe-grid-content-wrap .column").css("width",a+"%"),r(".tribe-grid-allday .tribe-grid-content-wrap .column").css("width",a+"%")}function g(){var e=r(".tribe-grid-body .tribe-grid-content-wrap .column > div[id*='tribe-events-event-']"),t=r(".tribe-week-grid-inner-wrap").height(),a=5e3;e.each(function(){var e=r(this),i=e.find("a"),n=e.attr("data-hour"),s=e.attr("data-duration"),o=e.attr("data-min"),d=r('.tribe-week-grid-block[data-hour="'+n+'"]'),l=d.offset().top-d.parent().offset().top-d.parent().scrollTop();l=parseInt(Math.round(l))+parseInt(o);var p=parseInt(t)-parseInt(s)-parseInt(l);p<0&&(s=s+p-14);var u,b=i.css("height","auto").height()+5;u=b>s?b:s-16;var c=u+16,_={height:u+"px"};l<a&&(a=l,O=e),e.css({height:c+"px",top:l+"px"}),i.css(_).parent().css(_)}),e.length||(O=r(".column.tribe-week-grid-hours div:first-child")),p(),v(),r("div[id^='tribe-events-event-']").css({visibility:"visible",opacity:"0"}).delay(500).animate({opacity:"1"},{duration:250}),_(e),tribe_ev.fn.equal_height(r(".tribe-grid-header .tribe-grid-content-wrap .column")),tribe_ev.fn.equal_height(r(".tribe-grid-allday .column")),setTimeout(function(){var e=r(".tribe-grid-body").height();r(".tribe-grid-body .tribe-grid-content-wrap .column").height(e)},250)}function m(e){var t=r('.tribe-mobile-day[data-day="'+e+'"]'),a=r('.column[title="'+e+'"] .tribe-week-event');a.length&&a.each(function(){var e=r(this);if(e.tribe_has_attr("data-tribejson")){var a=e.data("tribejson");t.append(tribe_tmpl("tribe_tmpl_week_mobile",a))}})}function f(e,t){var a=r("#tribe-mobile-container"),i=r('.tribe-mobile-day[data-day="'+e+'"]');i.length?i.show():(a.append('<div class="tribe-mobile-day" data-day="'+e+'"></div>'),m(e)),i.length||(i=r('.tribe-mobile-day[data-day="'+e+'"]')),!i.find("h5").length&&i.find(".tribe-events-mobile").length&&i.prepend('<h5 class="tribe-mobile-day-date">'+t+"</h5>")}function h(){var e=r(".tribe-events-mobile-day"),t=r("#tribe-events-content > .tribe-events-grid");r("#tribe-mobile-container").length||r('<div id="tribe-mobile-container" />').insertAfter(t),e.each(function(){var e=r(this),t=e.attr("title"),a=r('.tribe-grid-content-wrap .column[title="'+t+'"]'),i=a.find("span").attr("data-full-date");f(t,i)})}function y(){x.is(".tribe-mobile")?h():(b(),c(),u(),g())}function w(e,t){if("change_view"!=tribe_events_bar_action){if(e.preventDefault(),s.ajax_running)return;var i=r("#tribe-bar-date");s.popping=!1,t?(s.date=t,a.cur_url=q+s.date+"/"):i.length&&""!==i.val()?("0"!==s.datepicker_format?s.date=tribeDateFormat(i.bootstrapDatepicker("getDate"),"tribeQuery"):s.date=i.val(),a.cur_url=q+s.date+"/"):I?a.cur_url=q+s.date+"/":(s.date=a.cur_date,a.cur_url=q+a.cur_date+"/"),n.pre_ajax(function(){k()})}}function k(){if(!n.invalid_date(s.date)){r("#tribe-events-header");r(".tribe-events-grid").tribe_spin(),s.pushcount=0,s.ajax_running=!0,s.popping||(s.filter_cats&&(a.cur_url=q),s.params={action:"tribe_week",eventDate:s.date,featured:n.is_featured()},s.url_params={},a.default_permalinks&&(s.url_params.hasOwnProperty("eventDate")||(s.url_params.eventDate=s.date),s.url_params.hasOwnProperty("post_type")||(s.url_params.post_type=d.events_post_type),s.url_params.hasOwnProperty("eventDisplay")||(s.url_params.eventDisplay=s.view)),s.category&&(s.params.tribe_event_category=s.category),r(i).trigger("tribe_ev_serializeBar"),r(i).trigger("serialize-bar.tribe"),s.params=r.param(s.params),s.url_params=r.param(s.url_params),r(i).trigger("tribe_ev_collectParams"),r(i).trigger("collect-params.tribe"),s.pushstate=!0,s.do_string=!1,(s.pushcount>0||s.filters||a.default_permalinks)&&(s.pushstate=!1,s.do_string=!0)),o.pushstate?(l&&debug.time("Week View Ajax Timer"),r(i).trigger("tribe_ev_ajaxStart").trigger("tribe_ev_weekView_AjaxStart"),r(i).trigger("ajax-start.tribe").trigger("week-view-ajax-start.tribe"),r.post(TribeWeek.ajaxurl,s.params,function(e){if(s.initial_load=!1,n.enable_inputs("#tribe_events_filters_form","input, select"),e.success){s.ajax_running=!1,a.ajax_response={total_count:"",view:e.view,max_pages:"",tribe_paged:"",timestamp:(new Date).getTime()},a.cur_url=n.get_base_url();var o=r.parseHTML(e.html);r("#tribe-events-content.tribe-events-week-grid").replaceWith(o),y(),r("div[id*='tribe-events-event-']").hide().fadeIn("fast"),s.page_title=r("#tribe-events-header").data("title"),t.title=s.page_title,(r("#tribe-events.tribe-events-shortcode").length||s.do_string)&&(-1!==a.cur_url.indexOf("?")&&(a.cur_url=a.cur_url.split("?")[0]),a.cur_url=a.cur_url+"?"+s.url_params),s.do_string&&history.pushState({tribe_url_params:s.url_params,tribe_params:s.params},s.page_title,a.cur_url+"?"+s.url_params),s.pushstate&&history.pushState({tribe_url_params:s.url_params,tribe_params:s.params},s.page_title,a.cur_url),r(i).trigger("tribe_ev_ajaxSuccess").trigger("tribe_ev_weekView_AjaxSuccess"),r(i).trigger("ajax-success.tribe").trigger("week-view-ajax-success.tribe"),l&&debug.timeEnd("Week View Ajax Timer")}})):s.url_params.length?e.location=a.cur_url+"?"+s.url_params:e.location=a.cur_url}}var x=r("body"),j=r("#tribe-bar-date"),D=r("#tribe-events"),S=r("#tribe-events-bar"),T=r("#tribe-events-header"),C=0,I=!1,O=r(".column.tribe-week-grid-hours div:first-child"),q="/";"undefined"!=typeof d.events_base&&(q=r("#tribe-events-header").data("baseurl")),a.default_permalinks&&(q=q.split("?")[0]),Array.prototype.indexOf||(Array.prototype.indexOf=function(e){var t=this.length>>>0,r=Number(arguments[1])||0;for(r=r<0?Math.ceil(r):Math.floor(r),r<0&&(r+=t);r<t;r++)if(r in this&&this[r]===e)return r;return-1}),T.length&&(C=T.data("startofweek")),S.addClass("tribe-has-datepicker");var A=T.data("date");"0"!==s.datepicker_format&&(A=tribeDateFormat(A,"tribeQuery")),s.date=A;var W=[0,1,2,3,4,5,6],F=W.indexOf(C);F>-1&&W.splice(F,1);var V="yyyy-mm-dd";if("0"!==s.datepicker_format){V=a.datepicker_formats.main[s.datepicker_format];var E=n.get_url_param("tribe-bar-date");E&&j.val(tribeDateFormat(E,s.datepicker_format))}if(a.datepicker_opts={format:V,weekStart:C,daysOfWeekDisabled:W,autoclose:!0},j.bootstrapDatepicker(a.datepicker_opts).on("changeDate",function(e){if(!s.updating_picker){var t=tribeDateFormat(e.date,"tribeQuery");s.date=t,I=!0,(o.no_bar()||o.live_ajax()&&o.pushstate)&&(o.reset_on()||w(e,t))}}),y(),r(i).on("resize-complete.tribe",function(){y()}),o.pushstate&&!o.map_view()){var H="action=tribe_week&eventDate="+s.date;a.params.length&&(H=H+"&"+a.params),s.category&&(H=H+"&tribe_event_category="+s.category),n.is_featured()&&(H+="&featured=1"),history.replaceState({tribe_params:H,tribe_url_params:a.params},"",location.href),r(e).on("popstate",function(e){var t=e.originalEvent.state;t&&(s.do_string=!1,s.pushstate=!1,s.popping=!0,s.params=t.tribe_params,s.url_params=t.tribe_url_params,n.pre_ajax(function(){k()}),n.set_form(s.params))})}D.on("click",".tribe-events-nav-previous, .tribe-events-nav-next",function(e){if(e.preventDefault(),!s.ajax_running){var t=r(this).find("a");s.popping=!1,s.date=t.attr("data-week"),n.update_base_url(t.attr("href")),"0"!==s.datepicker_format?n.update_picker(tribeDateFormat(s.date,a.datepicker_formats.main[s.datepicker_format])):n.update_picker(s.date),n.pre_ajax(function(){k()})}}),r("form#tribe-bar-form").on("submit",function(e){w(e,null)}),n.snap("#tribe-events-content","body","#tribe-events-footer .tribe-events-nav-previous, #tribe-events-footer .tribe-events-nav-next"),r(i).on("run-ajax.tribe",function(){k()}),l&&debug.info("TEC Debug: tribe-events-week.js successfully loaded"),s.view&&l&&debug.timeEnd("Tribe JS Init Timer")})}(window,document,jQuery,tribe_ev.data,tribe_ev.events,tribe_ev.fn,tribe_ev.state,tribe_ev.tests,tribe_js_config,tribe_debug);