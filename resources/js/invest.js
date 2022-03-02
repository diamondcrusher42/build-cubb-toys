// temporary solution... Will replace with Vue

const project = document.getElementById('project');

if (project) {
  const projectId = project.dataset.id;
  const tiers = project.querySelectorAll('.support-project .support-tiers .tier');
  const popup = document.querySelector('.popup-container');

  popup.querySelector('.icon-close').addEventListener('click', function () {
    document.body.classList.remove('popup-open');
  });

  for (let i = 0; i < tiers.length; i++) {
    const tier = tiers[i];
    tier.querySelector('.invest-button').addEventListener('click', function () {
      const amount = tier.dataset.amount;
      document.body.classList.add('popup-open');
      let nf = new Intl.NumberFormat('sl-SI');
      popup.querySelector('.amount > strong').innerHTML = nf.format(amount) + ' €';
    });
  }

  popup.querySelector('.invest-button').addEventListener('click', function () {

  });
}


