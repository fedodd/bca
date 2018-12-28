export default (toggleBtn, toggleBlocks, mainBlocks) => {
  const toggleFunc = () => {
    toggleBlocks.map(elem =>
      document.getElementById(elem)
        .classList.toggle('is__active'));
  };

  const closeFunc = () => {
    toggleBlocks.map(elem =>
      document.getElementById(elem)
        .classList.remove('is__active'));
  };

  [...document.querySelectorAll(toggleBtn)]
    .map(elem => elem.addEventListener('click', (e) => {
      e.stopPropagation();
      toggleFunc();
    }));

  document.addEventListener('click', closeFunc);
  if (!mainBlocks) return;
  mainBlocks.forEach((mainBlock) => {
    document.getElementById(mainBlock).addEventListener('click', e => e.stopPropagation());
  });
};
