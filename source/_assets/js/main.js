import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const sections = gsap.utils.toArray(".js-scroll-card");

let maxWidth = 0;

const getMaxWidth = () => {
  maxWidth = 0;
  sections.forEach((section) => {
    maxWidth += section.offsetWidth;
  });
};

getMaxWidth();
ScrollTrigger.addEventListener("refreshInit", getMaxWidth);

gsap.to(sections, {
  x: () => `-${maxWidth - window.innerWidth}`,
  ease: "none",
  scrollTrigger: {
    trigger: "#services",
    pin: true,
    scrub: true,
    end: () => `+=${maxWidth}`,
    invalidateOnRefresh: true
  }
});

sections.forEach((sct, i) => {
  ScrollTrigger.create({
    trigger: sct,
    start: () => 'top top-=' + (sct.offsetLeft - window.innerWidth/2) * (maxWidth / (maxWidth - window.innerWidth)),
    end: () => '+=' + sct.offsetWidth * (maxWidth / (maxWidth - window.innerWidth)),
  });
});
