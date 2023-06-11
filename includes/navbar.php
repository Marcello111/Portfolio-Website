<!-- Header -->
<header class="header">
    <!-- Logo -->
    <a href="index.php" class="logo"> Marcell&apos;s website </a>
      <div>
        <!-- Dark/light mode -->
        <div class="switch">
          <label for="darkModeBtn">
            <input
              type="checkbox"
              id="darkModeBtn"
              class="switch__input dark-mode-switch"
            />
            <span class="switch__inner"></span>
            <img
              src="img/sunny-day.png"
              class="switch__img switch__img--light"
              alt="Sun icon"
            />
            <img
              src="img/sleep-mode.png"
              class="switch__img switch__img--dark"
              alt="Moon icon"
            />
          </label>
        </div>
        <!-- Navigation icon -->
        <nav class="navigation">
          <ul class="navigation__list">
            <li class="navigation__link">
              <div id="openMenu" class="navigation__button">
                <span class="navigation__icon navigation__icon--1"></span>
                <span class="navigation__icon navigation__icon--2"></span>
                <span class="navigation__icon navigation__icon--3"></span>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Navigation menu -->
      <nav class="navigation navigation--menu" id="navModal">
        <ul class="navigation__list navigation--menu-content">
          <li class="navigation__item">
            <a id="heroBtn" href="#hero" class="navigation__link" tabindex="-1"
              >Home</a
            >
          </li>
          <li class="navigation__item">
            <a
              id="devBtn"
              href="#development"
              class="navigation__link"
              tabindex="-1"
              >Development</a
            >
          </li>
          <li class="navigation__item">
            <a
              id="skillsBtn"
              href="#skills"
              class="navigation__link"
              tabindex="-1"
              >Skills</a
            >
          </li>
          <li class="navigation__item">
            <a
              id="contactBtn"
              href="#contact"
              class="navigation__link"
              tabindex="-1"
              >Contact</a
            >
          </li>
          <li class="navigation__item">
            <a
              href="#"
              class="btn btn--full"
              tabindex="-1"
              >Send Email</a
            >
          </li>
          <li class="navigation__item navigation__item--flex">
            <a
              class="icon icon--large"
              href="#"
              target="_blank"
              rel="noopener"
              tabindex="-1"
            >
              <img
                src="img/social-media.svg"
                class="icon__img"
                alt="Linkedin icon"
              />
            </a>
            <a
              class="icon icon--large"
              href="https://github.com/Marcello111/"
              target="_blank"
              rel="noopener"
              tabindex="-1"
            >
              <img src="img/square.svg" class="icon__img" alt="Github icon" />
            </a>
          </li>
        </ul>
      </nav>
    </header>
