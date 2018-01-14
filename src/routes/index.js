const express = require('express');
const session = require('express-session');
const router = express.Router();

const randomString = [
  "Web Designer/Developer by day. Asleep by night.",
  "Let me help with your website development today!",
  "I Node how to Express myself. JS.",
  "Hello, development world!",
  "Need a developer for your team? Hire me!",
  "I also dabble in Graphic Design!",
  "4:04 am. Sleep Not Found.",
  "My portfolio is MEAN.",
];

router.get('/', function(req, res, next) {
  let dmToggle = checkDarkMode(req, res, next);

  // Generate random number up to 10
  const index = Math.floor((Math.random() * 8));
  const pickString = randomString[index];

  res.render('index', {
    headerLogo: dmToggle.headerLogo,
    imageClass: 'logo-s',
    mainLogo: dmToggle.mainLogo,
    title: 'Mark Langenhorst Portfolio',
    randomString: pickString,
    bodyClass: dmToggle.bodyClass,
    navbarClass: dmToggle.navbarClass,
    dmBtn: dmToggle.button,
    facebook: dmToggle.facebook,
    twitter: dmToggle.twitter,
    linkedin: dmToggle.linkedin,
    google: dmToggle.google,
  });
});

router.get('/portfolio', function(req, res, next) {
  let dmToggle = checkDarkMode(req, res, next);

  res.render('portfolio', {
    headerLogo: dmToggle.mainLogo,
    imageClass: 'logo',
    title: 'Portfolio',
    bodyClass: dmToggle.bodyClass,
    navbarClass: dmToggle.navbarClass,
    dmBtn: dmToggle.button,
    facebook: dmToggle.facebook,
    twitter: dmToggle.twitter,
    linkedin: dmToggle.linkedin,
    google: dmToggle.google,
  });
});

router.get('/resume', function(req, res, next) {
  let dmToggle = checkDarkMode(req, res, next);

  res.render('Resume', {
    headerLogo: dmToggle.mainLogo,
    imageClass: 'logo',
    title: 'Resume',
    bodyClass: dmToggle.bodyClass,
    navbarClass: dmToggle.navbarClass,
    dmBtn: dmToggle.button,
    facebook: dmToggle.facebook,
    twitter: dmToggle.twitter,
    linkedin: dmToggle.linkedin,
    google: dmToggle.google,
  });
});

router.get('/darkMode', function(req, res, next) {
  // Generate random number up to 10
  const index = Math.floor((Math.random() * 8));
  const pickString = randomString[index];

  let dmToggle = req.session;

  if (dmToggle.DarkModeOn === true){
    dmToggle.DarkModeOn = false;
  } else {
    dmToggle.DarkModeOn = true;
  }

  dmToggle = checkDarkMode(req, res, next);

  res.render('index', {
    headerLogo: dmToggle.headerLogo,
    imageClass: 'logo-s',
    mainLogo: dmToggle.mainLogo,
    title: 'Mark Langenhorst Portfolio',
    randomString: pickString,
    bodyClass: dmToggle.bodyClass,
    navbarClass: dmToggle.navbarClass,
    dmBtn: dmToggle.button,
    facebook: dmToggle.facebook,
    twitter: dmToggle.twitter,
    linkedin: dmToggle.linkedin,
    google: dmToggle.google,
  });
});

function checkDarkMode(req, res, next) {
  let dmToggle = req.session;
  if (dmToggle.DarkModeOn === true){
    dmToggle.bodyClass = 'light';
    dmToggle.navbarClass = 'navbar-light';
    dmToggle.headerLogo = './images/ML_icon_w.png';
    dmToggle.mainLogo = './images/MarkLangenhorst_w_t.png';
    dmToggle.button = './images/dark-mode_on.png';
    dmToggle.facebook = './images/facebook_w.png';
    dmToggle.twitter = './images/twitter_w.png';
    dmToggle.linkedin = './images/linkedin_w.png';
    dmToggle.google = './images/google_w.png';
  } else {
    dmToggle.bodyClass = 'dark';
    dmToggle.navbarClass = 'navbar-dark';
    dmToggle.headerLogo = './images/ML_icon.png';
    dmToggle.mainLogo = './images/MarkLangenhorst_t.png';
    dmToggle.button = './images/dark-mode_off.png';
    dmToggle.facebook = './images/facebook.png';
    dmToggle.twitter = './images/twitter.png';
    dmToggle.linkedin = './images/linkedin.png';
    dmToggle.google = './images/google.png';
  }
  return dmToggle;
}

module.exports = router;
