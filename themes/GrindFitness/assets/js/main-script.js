(function (w, d, t, r, u) {
  var f, n, i;
  (w[u] = w[u] || []),
    (f = function () {
      var o = { ti: "56361407" };
      (o.q = w[u]), (w[u] = new UET(o)), w[u].push("pageLoad");
    }),
    (n = d.createElement(t)),
    (n.src = r),
    (n.async = 1),
    (n.onload = n.onreadystatechange =
      function () {
        var s = this.readyState;
        (s && s !== "loaded" && s !== "complete") ||
          (f(), (n.onload = n.onreadystatechange = null));
      }),
    (i = d.getElementsByTagName(t)[0]),
    i.parentNode.insertBefore(n, i);
})(window, document, "script", "//bat.bing.com/bat.js", "uetq");

jQuery(document).ready(function ($) {
  $("#customer-total-reviews-btn").click(function () {
    $("#customer-total-reviews").css("display", "block");
  });

  $("#customer-total-reviews-close-btn").click(function () {
    $("#customer-total-reviews").css("display", "none");
  });

  $(document).on("click", function (e) {
    if (
      !(
        $(e.target).closest("#ctr-mainbox").length > 0 ||
        $(e.target).closest("#customer-total-reviews-btn").length > 0
      )
    ) {
      $("#customer-total-reviews").css("display", "none");
    }
  });
});
