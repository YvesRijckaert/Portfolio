{
  // AJAX PROJECTS
  const $ul = document.querySelector(`.projects-grid`);

  const parseCategories = categories => {
    const items = categories
      .map(
        category =>
          `<li>
            <article class="project">
              <a href="index.php?page=project&id=${category.id}">
                <h3 class="medium-title project-text">${category.title}</h3>
                <img class="project-img" src="../assets/img/${category.shorttitle}-project.png" />
              </a>
            </article>
          </li>`
      )
      .join(``);
    $ul.innerHTML = items;
  };

  const handleActiveClass = category => {
    document.querySelectorAll(`.category-button`).forEach(label => {
      label.classList.remove(`category-active`);
    });
    document
      .querySelector(`#label-${category}`)
      .classList.add(`category-active`);
  };

  const handleCategoryChange = e => {
    $ul.innerHTML = `<div class="loading-page"><svg class="loading-page-spinner" viewBox="0 0 50 50">
    <path
      fill="#fff"
      d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z"
    >
      <animateTransform
        attributeType="xml"
        attributeName="transform"
        type="rotate"
        from="0 25 25"
        to="360 25 25"
        dur="0.6s"
        repeatCount="indefinite"
      />
    </path>
  </svg></div>`;
    const category = e.currentTarget.value;
    handleActiveClass(category);
    fetch(`index.php?page=projects&category=${category}`, {
      headers: new Headers({
        Accept: `application/json`
      })
    })
      .then(r => r.json())
      .then(data => parseCategories(data));
  };

  // VALIDATION
  const getErrorElement = $element => {
    const $testElement = $element.parentElement.querySelector(`.form-error`);
    if (!$testElement) {
      return getErrorElement($element.parentElement);
    }
    return $testElement;
  };

  const handleSubmitForm = e => {
    const $form = e.currentTarget;

    if (!$form.checkValidity()) {
      e.preventDefault();
    }

    [...$form.elements].forEach($field => showValidationInfo($field));
  };

  const showValidationInfo = $field => {

    const $error = getErrorElement($field);

    if ($field.validity.valueMissing) {
      $error.textContent = `Please fill in this field.`;
      $field.style.borderColor = `#ee483c`;
    }

    if ($field.validity.typeMismatch) {
      $error.textContent = `This is not a valid email address.`;
      $field.style.borderColor = `#ee483c`;
    }

  };

  const handleBlurField = e => {
    const $inputField = e.currentTarget;
    showValidationInfo($inputField);
  };

  const handleInputField = e => {
    const $inputField = e.currentTarget;
    const $error = getErrorElement($inputField);

    if ($inputField.validity.valid) {
      $error.textContent = ``;
      $inputField.style.borderColor = `#16988c`;
    }
  };

  const addValidationListeners = inputFields => {
    inputFields.forEach($inputField => {
      $inputField.addEventListener(`blur`, handleBlurField);
      $inputField.addEventListener(`input`, handleInputField);
    });
  };

  const init = () => {
    //svg scroll animation
    const sections = document.querySelectorAll(`.home-service-svg`);
    window.onscroll = () => {
      if (!document.querySelectorAll(`.home-service-svg:not(.start)`)) return;
      sections.forEach(section => {
        if (section.getBoundingClientRect().top <= window.innerHeight * 0.75 && section.getBoundingClientRect().top > 0) {
          section.classList.add(`start`);
        }
      });
    };

    //ajax for projects
    const categorySubmit = document.querySelector(`.category-submit`);
    if (categorySubmit) {
      categorySubmit.remove();
    }
    document
      .querySelectorAll(`.radio-button`)
      .forEach(category =>
        category.addEventListener(`change`, handleCategoryChange)
      );

    //validation form
    if (document.querySelector(`.contact-form`)) {
      const $form = document.querySelector(`.contact-form`);
      $form.noValidate = true;

      $form.addEventListener(`submit`, handleSubmitForm);
      addValidationListeners([...$form.elements]);
    }
  };

  init();
}
