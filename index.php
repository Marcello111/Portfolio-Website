<?php
$description = 'This is a portfolio website of a Junior Full-Stack Developer from Bristol';
$title = 'Portfolio Website';
?>
<?php include 'includes/header.php' ?>
  <!-- Main -->
  <main>
    <!-- Hero -->
    <section class="section-hero container" id="hero">
      <div class="hero">
        <div>
          <h1 class="heading-primary">
            Hi, there. I'm Marcell, a <br />
            <span class="hero__text-accent">Full-Stack Developer</span> <br />
            from Bristol.
          </h1>
          <div class="hero__btn-box">
            <a href="#development" class="btn btn--full">Development</a>
            <a href="#" class="btn btn--outline"
              >Send Email</a
            >
          </div>
        </div>
        <div class="hero__img-box">
          <img
            src="img/undraw_Developer_activity_re_39tg.svg"
            class="hero__img"
            alt="Person working with a computer"
          />
        </div>
      </div>
    </section>
    <!-- Development -->
    <section class="section-development container" id="development">
      <h2 class="heading-secondary">Development</h2>
      <div class="development">
        <div class="development__text-box">
          <p class="paragraph">
            I developed this website with the below in mind.
          </p>
          <h3 class="heading-tertiary">Methodology</h3>
          <p class="paragraph">
            I built this website using semantic HTML, and Sass (SCSS) for all
            CSS pre-processing. I applied BEM methodology, and both CSS and
            HTML validators to check my code. For the interactive elements, I
            used Vanilla JavaScript.
          </p>
          <p class="paragraph">
            To ensure browser compatibility, I used Autoprefixer and fallback
            when it was necessary. Also, I tested the website regularly on the
            most popular browsers.
          </p>
          <h3 class="heading-tertiary">
            Responsive Web Design and Accessibility
          </h3>
          <p class="paragraph">
            This website is fully responsive, following the main principles of
            RWD. I used Desktop first approach and SVG-s instead of bitmap
            images when possible.
          </p>
          <p class="paragraph">
            This website was built with accessibility in mind. It means: using
            the headings correctly and ARIA attributes when necessary, adding
            proper alt texts, and giving links descriptive names. I have also
            chosen the background and main text colours with proper contrast
            ratio and applied proper font-sizes on all screens with the right
            visual hierarchy.
          </p>
        </div>
        <div class="development__img-box">
          <img
            src="img/undraw_Code_thinking_re_gka2.svg"
            class="development__img"
            alt="Person sitting next to a laptop"
          />
        </div>
        <div class="development__text-link-box">
          <h3 class="heading-tertiary margin-top-zero">
            Performance and Security
          </h3>
          <p class="paragraph">
            As a website should be as fast as possible, I used mainly SVG-s
            and optimized the PNG-s. Also, I reduced the HTTP requests and
            deferred the JavaScript file. I preloaded the fonts, and as a last step, I have minified the
            CSS. I analysed the performance with Lighthouse.
          </p>
          <p class="paragraph">
            While this is a static website, there were still some steps that
            could be done to make it more secure. It uses SSL/TLS certificate
            and there is no external JavaScript
            library.
          </p>
          <div class="development__link-box">
            <a
              href="https://github.com/Marcello111/Portfolio-Website"
              target="_blank"
              rel="noopener"
              class="development__link"
            >
              <span>See the Code of the Website </span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6 development__icon"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M8.25 4.5l7.5 7.5-7.5 7.5"
                />
              </svg>
            </a>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.25 4.5l7.5 7.5-7.5 7.5"
              />
            </svg>
          </div>
        </div>
      </div>
    </section>
    <!-- Skills -->
    <section class="section-skills" id="skills">
      <h2 class="heading-secondary container">Skills</h2>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
        class="wave"
      >
        <path
          fill="#6A8F94"
          fill-opacity="0.5"
          d="M0,192L48,202.7C96,213,192,235,288,218.7C384,203,480,149,576,128C672,107,768,117,864,149.3C960,181,1056,235,1152,261.3C1248,288,1344,288,1392,288L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
      <div class="skills">
        <div class="skills__inner">
          <div class="card">
            <header class="card__heading">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#2E868C"
                class="w-6 h-6 card__icon"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"
                />
              </svg>
            </header>
            <h3 class="heading-tertiary">Coding</h3>
            <div class="card__textbox">
              <p class="paragraph">HTML, CSS, JavaScript, PHP</p>
              <p class="paragraph">jQuery, Bootstrap</p>
            </div>
          </div>
          <div class="card">
            <header class="card__heading">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2E868C" class="w-6 h-6 card__icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
              </svg>
            </header>
            <h3 class="heading-tertiary">Responsive Design</h3>
            <div class="card__textbox">
              <p class="paragraph">Mobile First Design, Grid</p>
              <p class="paragraph">Flexbox, Media Queries</p>
            </div>
          </div>
          <div class="card">
            <header class="card__heading">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2E868C" class="w-6 h-6 card__icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
              </svg>
            </header>
            <h3 class="heading-tertiary">Database management</h3>
            <div class="card__textbox">
              <p class="paragraph">SQL, MySQL</p>
              <p class="paragraph">phpMyAdmin</p>
            </div>
          </div>
          <div class="card">
            <header class="card__heading">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2E868C" class="w-6 h-6 card__icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
              </svg>
            </header>
            <h3 class="heading-tertiary">Soft Skills</h3>
            <div class="card__textbox">
              <p class="paragraph">Keen to learn, Positive Attitude</p>
              <p class="paragraph">Problem Solving, Communication</p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#6A8F94"
          fill-opacity="0.5"
          d="M0,192L48,202.7C96,213,192,235,288,218.7C384,203,480,149,576,128C672,107,768,117,864,149.3C960,181,1056,235,1152,261.3C1248,288,1344,288,1392,288L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>
    </section>
    <!-- Contact -->
    <section class="section-contact container" id="contact">
      <h2 class="heading-secondary">Contact</h2>
      <div class="contact">
        <div class="contact__information">
          <div class="contact__details">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="#2E868C"
              class="w-6 h-6 contact__icon"
            >
              <path
                fill-rule="evenodd"
                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                clip-rule="evenodd"
              />
            </svg>
            <p class="contact__text">Bristol, UK</p>
          </div>
          <div class="contact__details">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="#2E868C"
              class="w-6 h-6 contact__icon"
            >
              <path
                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"
              />
              <path
                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"
              />
            </svg>
            <a href="#" class="contact__link"
              >Email</a
            >
          </div>
          <div class="contact__details">
            <img
              src="img/social-media.svg"
              class="contact__icon"
              alt="Linkedin icon"
            />
            <a
              href="#"
              target="_blank"
              rel="noopener"
              class="contact__link"
              >LinkedIn</a
            >
          </div>
          <div class="contact__details">
            <img
              src="img/square.svg"
              class="contact__icon"
              alt="Github icon"
            />
            <a
              href="https://github.com/Marcello111/"
              target="_blank"
              rel="noopener"
              class="contact__link"
              >Github</a
            >
          </div>
        </div>
        <div class="contact__img-box">
          <img
            src="img/undraw_delivery_address_03n0.svg"
            class="contact__img"
            alt="Person with an open and a closed envelope illustration"/>
        </div>
      </div>
    </section>
    <!-- Go to top icon -->
    <a href="#hero" class="go-to-top" aria-label="Go to top" tabindex="-1">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="#2E868C"
        class="w-6 h-6"
      >
        <path
          fill-rule="evenodd"
          d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
          clip-rule="evenodd"
        />
      </svg>
    </a>
  </main>
<?php include 'includes/footer.php' ?>
