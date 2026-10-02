(function () {
  var nodes = document.querySelectorAll(".count");
  if (!nodes.length) {
    return;
  }

  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  function run(el) {
    var target = parseInt(el.getAttribute("data-count"), 10);
    if (reduce || !target) {
      el.textContent = String(target);
      return;
    }

    var start = null;
    var duration = 1400;

    function frame(ts) {
      if (start === null) {
        start = ts;
      }
      var progress = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = String(Math.round(target * eased));
      if (progress < 1) {
        window.requestAnimationFrame(frame);
      }
    }

    window.requestAnimationFrame(frame);
  }

  if (!("IntersectionObserver" in window)) {
    Array.prototype.forEach.call(nodes, run);
    return;
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) {
        return;
      }
      run(entry.target);
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.5 });

  Array.prototype.forEach.call(nodes, function (node) {
    observer.observe(node);
  });
}());
