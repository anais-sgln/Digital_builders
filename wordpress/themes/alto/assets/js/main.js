// Point d'entrée JS du thème (GSAP, Photo Sphere Viewer viendront ici).
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
document.documentElement.classList.toggle('alto-reduce-motion', reduceMotion);
