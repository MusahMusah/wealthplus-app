/*! Investorm v1.1.5 | Copyright by Softnio. */
!function(a,b){"use strict";function c(){let c=b(".ua-updp"),d=b(".quick-update-profile"),e=b(".clear-profile-log"),f=b(".form-profile");a.Form.states(f),d.on("click",function(c){let d,e,f=b(this),g=f.data("key"),h=f.attr("name"),i=f.attr("type"),j=f.attr("href");j!==void 0&&c.preventDefault(),i===x&&(d=f.prop("checked")?"on":"off"),g&&(e=g+"_"+h),h&&profileSetting&&a.Form.toPost(profileSetting,{profile_settings:{option:e,value:d}})}),e.on("click",function(c){let d=b(this).attr("href"),e=b(this).data("action"),f=!!(typeof msgs!=y&&typeof msgs.logs!=y&&msgs.logs)&&msgs.logs;d&&f?a.Ask(f.title,f.context,f.btn,"danger").then(function(b){b&&("ajax"==e?a.Form.toPost(d,{}):window.location.href=d)}):a.Toast(z,"error",{ui:"is-dark"}),c.preventDefault()}),c.on("click",function(c){let d=b(this),e=d.closest(".form-profile");c.preventDefault(),e.valid()&&a.Form.toSubmit(e,{btn:d,reload:!0})})}function d(){let c=b("#update-email"),d=b("#email-confirm-msg"),e=b("#email-modal-tgl"),f=b(".email-rq-verify"),g="#confirm-email";c.on("click",function(){let c=b(this),f=c.closest("form.form-authentic"),h=c.closest(".modal");if(f.valid()){let i=f.serialize(),j=f.attr("action");c.prop("disabled",!0),a.Form.toPost(j,i,{btn:c,onSuccess:function(a){f[0].reset(),h.modal("hide"),d.text(a.msg),e.attr("data-target",g),b(g).modal({show:!0,backdrop:"static"})}})}}),f.on("click",function(){let c=b(this),d=c.data("url"),e=c.data("action");if(e){let b={request_type:"cancel"===e?"cancel":"verification"};a.Form.toPost(d,b,{btn:c,reload:!("cancel"!==e),after:function(){setTimeout(function(){a.Form.button(c,!0,!1)},1e3)}})}});let h=b("#update-password"),i=b("#change-password-success");h.on("click",function(){let c=b(this),d=c.closest("form.form-authentic"),e=c.closest(".modal");if(d.valid()){let b=d.serialize(),f=d.attr("action");c.prop("disabled",!0),a.Form.toPost(f,b,{btn:c,onSuccess:function(){d[0].reset(),e.modal("hide"),i.modal({show:!0})}})}})}function e(){let c="#pms-ajcon";v.on("click","#deposit-now",function(d){d.preventDefault();var e=b(this),f=e.closest("form"),h=f.find("#payment-option-list"),i=f.find("input[name=deposit_amount]"),j=f.find("input[name=deposit_method]:checked").val();j?g(f,e,c):(h.addClass("border-danger"),a.Toast(f.data("required_msg"),"warning"))}),v.on("click","#proceed-btn",function(a){a.preventDefault();let d=b(this),e=d.closest("form"),f=e.find("input[name=deposit_amount]"),h=parseFloat(f.val());h&&0<h?g(e,d,c):f.addClass("border-danger")}),v.on("click","#confirm-deposit",function(d){d.preventDefault();let e=b(this),f=e.data("url");a.Form.toForward(f,{confirm:!0},{btn:e,container:c})})}function f(){let c="#prm-amnt";v.on("click",".switch-currency",function(){let d=b(this),e=d.data("switch"),f=d.data("currency").toUpperCase();b("#"+e+"-currency-name").text(f),b("#"+e+"-currency").val(f),a.Helper.sw2c(d,f,{cfx:fxCur}),a.Helper.dfx(c,!1,{key:"prm",cfx:fxCur})}),v.on("input",".prm-amount",function(){let d=b(this),e=d.val(),f=!d.is(c),g=f?2:1;d.val(e.replace(/[^\d.]/g,"")),b("#prm-amnt-by").val(g),a.Helper.dfx(d,f,{key:"prm",cfx:fxCur})})}function g(b,c,d){let e=b.attr("action"),f=b.serialize();a.Form.toForward(e,f,{btn:c,container:d,after:n("input[name=deposit_amount]")})}function h(){let c="#wds-ajcon";v.on("click","#withdraw-now",function(d){d.preventDefault();var e=b(this),f=e.closest("form"),g=f.find("#wd-option-list"),h=f.find("input[name=withdraw_method]:checked").val();h?k(f,e,c):(g.addClass("border-danger"),a.Toast(f.data("required_msg"),"warning"))}),v.on("click","#wdm-continue",function(d){d.preventDefault();let e=b(this),f=e.closest("form"),g=f.find("input[name=wd_amount]"),h=parseFloat(g.val()),i=!0,j="";(!h||0>=h)&&(i=!1,j=reqMsg.required),!0===i?k(f,e,c):(g.addClass("border-danger"),a.Toast(j,"warning"))}),v.on("click","#wd-confirm",function(d){d.preventDefault();let e=b(this),f=e.data("url");a.Form.toForward(f,{confirm:!0},{btn:e,container:c})})}function i(){let c="#wdm-amount-from";v.on("click",".wdm-change",function(){let d=b(this),e=d.data("currency").toUpperCase();typeof fxCur==y?a.Toast(z,"error",{ui:"is-dark"}):(b(".wdm-change").parent().removeClass("selected"),d.parent().addClass("selected"),a.Helper.sw2ac(d,e),a.Helper.wfx(c,!1,{key:"wdm",cfx:fxCur}))}),v.on("input",".wd-amount",function(){let d=b(this),e=d.val(),f=!d.is(c),g=f?2:1;d.val(e.replace(/[^\d.]/g,"")),b("#wdm-amount-by").val(g),a.Helper.wfx(d,f,{key:"wdm",cfx:fxCur})})}function j(){v.on("click",".wd-view-account",function(){let c=b(this),d=c.data("action"),e="#"+c.data("modal");a.Form.toModal(d,[],{modal:e})}),v.on("click",".wd-new-account",function(){let c=b(this),d=c.data("action"),e="#"+c.data("modal");a.Form.toModal(d,[],{modal:e})}),v.on("click","#svu-wd-account",function(){let c=b(this),d=c.closest("form"),e=c.closest(".modal"),f=d.attr("action"),g=d.serialize(),h=c.data("redirect");a.Form.button(c,!1,!0),"yes"==h?a.Form.toForward(f,g,{btn:c,container:"#wds-ajcon",modal:e}):a.Form.toPost(f,g,{btn:c,reload:!0})}),v.on("click","#delete-wd-account",function(){let c=b(this),d=c.data("url"),e=c.closest(".modal"),f=!!(typeof msgs!=y&&typeof msgs.wdm!=y&&msgs.wdm)&&msgs.wdm;d&&f?a.Ask(f.title,f.context,f.btn,"danger").then(function(b){b&&a.Form.toPost(d,[],{reload:1e3,position:"bottom-center",hide:e})}):a.Toast(z,"error",{ui:"is-dark"})})}function k(b,c,d){let e=b.attr("action"),f=b.serialize();a.Form.toForward(e,f,{btn:c,container:d,after:n("input.wd-amount")})}function l(){let c=b(".update-meta a");c.on("click",function(c){let d=b(this),e=d.data("meta"),f=d.data("value"),g=d.data("type"),h=d.data("update"),i=!(h&&"silent"==h)&&500,j=!d.parent().hasClass("active");if(e&&f&&updateSetting&&j){a.Form.toPost(updateSetting,{meta:e,value:f,type:g},{onSuccess:function(b){"warning"===b.type?a.Toast(b.msg,b.type):(i&&setTimeout(function(){window.location.reload()},i),console.log(b))}})}c.preventDefault()})}function m(){let a=b(".pagination-dropdown");a.on("change",function(){window.location.href=b(this).val()})}function n(a){v.on("input",a,function(){let a=b(this).val();b(this).val(a.replace(/[^\d.]/g,""))})}function o(){v.on("click",".tnx-details",function(){let c=b(this),d={id:c.data("tnx")};a.Form.toModal(getTnxDetails,d,{modal:w,backdrop:!0})}),v.on("click","#make-paypal-payment",function(){let c=b(this),d={id:c.data("tnx")},e=c.data("url");e&&a.Form.toPost(e,d,{btn:c,onSuccess:function(a){a.redirect&&(window.location.href=a.approve_url.href)}})})}function p(){let c=b(".iv-payout");c.on("click",function(c){c.preventDefault();let d=b(this),e=d.attr("href");a.Form.toModal(e,[],{modal:w})}),v.on("click",".iv-payout-proceed",function(){let c=b(this),d=c.parents("form"),e=d.attr("action"),f=d.serialize();e&&a.Form.toPost(e,f,{btn:c,after:function(){setTimeout(function(){c.parents(".modal").modal("hide")},800)}})})}function q(){function c(c,d,e){a.Form.toPost(c,d,{btn:b(e),reload:!0})}let d="#iv-step-container";v.on("click",".iv-plan-change",function(){let c=b(this),d=c.data("plan"),e=c.data("uid"),f=c.data("change"),g=b("."+f+"-min"),h=b("."+f+"-max"),i=b("."+f+"-fixed"),j=b("."+f+"-lb-amount"),k=b("."+f+"-lb-fixed"),l=b("."+f+"-amount");if(typeof plans!=y&&typeof plans[e]!=y){b(".iv-plan-change").parent().removeClass("selected"),c.parent().addClass("selected"),b("#"+f).val(d),b("#"+f+"-scheme").html(c.html());let a=plans[e].min,m=plans[e].max,n=plans[e].amount,o=plans[e].fixed;1==o?(l.val(n).removeAttr("placeholder").attr("readonly",!0),h.add(g).add(h).add(j).addClass("hide"),i.add(k).removeClass("hide")):(l.attr("placeholder",n).removeAttr("readonly").val(""),h.add(g).add(h).add(j).removeClass("hide"),i.add(k).addClass("hide"),0==a?g.addClass("hide"):g.removeClass("hide").find(".amount").html(a),0==m?h.addClass("hide"):h.removeClass("hide").find(".amount").html(m))}else a.Toast(z,"error",{ui:"is-dark"})}),v.on("click",".iv-get-started",function(c){c.preventDefault();let e=b(this),f=e.parents("form"),g=f.attr("action"),h=f.serialize();a.Form.toForward(g,h,{btn:e,container:d})}),v.on("click",".iv-invest-confirm",function(c){c.preventDefault(),typeof routes.confirm==y?a.Toast(z,"error",{ui:"is-dark"}):a.Form.toPost(routes.confirm,{action:"confirm"},{btn:b(this),onSuccess:function(a){b(d).html(a)}})}),v.on("click",".iv-invest-cancel",function(d){d.preventDefault();let e=b(this),f=e.data("action"),g=e.data("confirm");console.log(f,g),typeof routes[f]==y?a.Toast(z,"error",{ui:"is-dark"}):g&&typeof msgs[f]!=y&&msgs[f]?a.Ask(msgs[f].title,msgs[f].context,msgs[f].btn,msgs[f].custom,msgs[f].type).then(function(a){a&&c(routes[f],{action:"cancel"},e)}):c(routes[f],{action:"cancel"},e)})}function r(){let c=b(".submit-form");c.on("click",function(d){d.preventDefault();let e=b(this).parents("form");e.valid()&&(a.Form.button(c,!1,!0),a.Form.toSubmit(e,{btn:c}))})}function s(){let a=b(".cookie-banner"),c=a.find(".btn");c.on("click",function(c){c.preventDefault();let d=typeof consentURI!=y&&consentURI,e={consent:b(this).data("consent")};d&&e&&NioApp.Form.toPost(d,e,{onSuccess:function(b){"success"==b.status?a.remove():b.message&&NioApp.Toast(b.message,"error")}})})}function t(){let c=b(".ajax-submit");c.on("click",function(c){let d=b(this),e=d.parents("form"),f=e.attr("action"),g=e.serialize();f&&g&&a.Form.toPost(f,g,{btn:d}),c.preventDefault()})}function u(){let c=b(".validate-username"),d=null;c.on("input",function(){let c=b(this),e=typeof routes!=y&&routes,f=c.val(),g=c.parent("div").find(".validate-username-loader"),h=c.parent("div").find(".validate-username-error");d&&clearTimeout(d),g.removeClass("hide"),h.addClass("hide"),e.validate?d=setTimeout(function(){a.Form.toPost(e.validate,{username:f},{onSuccess:function(a){g.addClass("hide"),h.removeClass("hide"),a.note&&h.attr("data-original-title",a.note),a.error?h.removeClass("ni-check").addClass("ni-alert"):h.removeClass("ni-alert").addClass("ni-check")}})},300):a.Toast(z,"error",{ui:"is-dark"})})}let v=b(document),w=b("#ajax-modal"),x="checkbox",y="undefined",z="Something is wrong or may invalid action.";b.ajaxSetup({headers:{"X-CSRF-TOKEN":b("meta[name=\"csrf-token\"]").attr("content")}}),v.ready(function(){e(),f(),h(),i(),j(),c(),d(),l(),m(),o(),q(),p(),u(),r(),s(),t()})}(NioApp,jQuery);
