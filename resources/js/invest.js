// temporary solution... Will replace with Vue

const project = document.getElementById('project');

if (project) {
  const projectId = project.dataset.id;
  const tiers = project.querySelectorAll('.support-project .support-tiers .tier');
  const popup = document.querySelector('.popup-container');
  let selectedAmount = 0;

  popup.querySelector('.icon-close').addEventListener('click', function () {
    document.body.classList.remove('popup-open');
    popup.querySelector('.content').style.display = 'block';
    popup.querySelector('.content.success').style.display = 'none';
  });

  for (let i = 0; i < tiers.length; i++) {
    const tier = tiers[i];
    tier.querySelector('.invest-button').addEventListener('click', function () {
      const amount = tier.dataset.amount;
      document.body.classList.add('popup-open');
      let nf = new Intl.NumberFormat('sl-SI');
      popup.querySelector('.amount > strong').innerHTML = nf.format(amount) + ' €';
      selectedAmount = amount;
    });
  }

  const nameInput = popup.querySelector('#investor-name');
  const emailInput = popup.querySelector('#investor-email');
  const termsCheckbox = popup.querySelector('.checkbox.terms input');

  const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };

  const errorEl = popup.querySelector('.error');

  popup.querySelector('.invest-button').addEventListener('click', function () {

    if (nameInput.value.length < 2) {
      errorEl.style.display = 'block';
      errorEl.innerHTML = 'Please enter a valid name!';
      return false;
    }

    if (!validateEmail(emailInput.value)) {
      errorEl.style.display = 'block';
      errorEl.innerHTML = 'Please enter a valid email address!';
      return false;
    }

    if (!termsCheckbox.checked) {
      errorEl.style.display = 'block';
      errorEl.innerHTML = 'You have to agree to terms & conditions';
      return false;
    }

    errorEl.style.display = 'none';

    axios.post('/api/invest', {
      projectId: projectId,
      amount: selectedAmount,
      name: nameInput.value,
      email: emailInput.value
    })
    .then(function (response) {
      popup.querySelector('.content').style.display = 'none';
      popup.querySelector('.content.success').style.display = 'block';
    })
    .catch(function (error) {
      console.error(error);
    });

  });

}
