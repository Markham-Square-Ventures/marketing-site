init();

var g_containerInViewport;
function init() {
  setStickyContainersSize();
  bindEvents();
}

function bindEvents() {
  window.addEventListener("wheel", wheelHandler);
}

function setStickyContainersSize() {
  document.querySelectorAll(".sticky-container").forEach(function (container) {
    const stickyContainerHeight = container.offsetWidth * 4 - 40;
    container.setAttribute("style", "height: " + stickyContainerHeight + "px");
  });
}

function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return rect.top <= 0 && rect.bottom > document.documentElement.clientHeight;
}

function wheelHandler(evt) {
  const containerInViewPort = Array.from(
    document.querySelectorAll(".sticky-container")
  ).filter(function (container) {
    return isElementInViewport(container);
  })[0];

  if (!containerInViewPort) {
    return;
  }

  var isPlaceHolderBelowTop =
    containerInViewPort.offsetTop < document.documentElement.scrollTop;
  var isPlaceHolderBelowBottom =
    containerInViewPort.offsetTop + containerInViewPort.offsetHeight >
    document.documentElement.scrollTop;
  let g_canScrollHorizontally =
    isPlaceHolderBelowTop && isPlaceHolderBelowBottom;

  if (g_canScrollHorizontally) {
    containerInViewPort.querySelector("div").scrollLeft += evt.deltaY;
  }
}
