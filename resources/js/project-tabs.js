const tabsWrap = document.querySelector('#project .tabs');

if (tabsWrap) {

  const tabs = tabsWrap.querySelectorAll('.tab');

  for (let i = 0; i < tabs.length; i++) {

    const tab = tabs[i];
    const title = tab.querySelector('.title');
    const content = tab.querySelector('.tab-content');

    if (tab.classList.contains('active')) {
      tabsWrap.style.paddingBottom = content.offsetHeight + 'px';
    }


    title.addEventListener('click', function () {
      for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active');
      }

      tab.classList.add('active');
      tabsWrap.style.paddingBottom = content.offsetHeight + 'px';
    });
  }
}
