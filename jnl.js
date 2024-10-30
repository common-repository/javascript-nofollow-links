function leep_jnl_click(ev) {
  var elem = Event.element(ev);
  var url = elem.readAttribute('data-loc');
  if (url.match(/^https?:\/\//) == null)
    url = "http://" + url;
  parent.location.href = url;
}

document.observe('dom:loaded', function() {
  $$('b[data-loc]').each(function(element) {
      Event.observe(element, 'click', leep_jnl_click);
  });
});
