const express = require('express');
const session = require('express-session');
const router = express.Router();
const portInfo = require('../public/js/portfolio.js');
const resInfo = require('../public/js/resume.js');

const randomString = [
  `Web Designer/Developer by day. \nAsleep by night.`,
  "Let me help with your website needs!",
  "I Node how to Express myself. JS.",
  "Hello, development world!",
  "Need a Developer for your team? Contact me!",
  "I also dabble in Graphic Design!",
  "4:04 am. Sleep Not Found.",
  "My portfolio is MEAN.",
  "; can change everything."
];

router.get('/', function(req, res, next) {
  let dmToggle = checkDarkMode(req, res, next);

  // Generate random number up to 10
  const index = Math.floor((Math.random() * 9));
  const pickString = randomString[index];

  renderView(req, res, next,
    'Mark Langenhorst Portfolio',
    'index',
    '',
    pickString);
});

router.get('/portfolio', function(req, res, next) {
  let dmToggle = checkDarkMode(req, res, next);

  renderView(req, res, next,
    'Portfolio',
    'portfolio',
    portInfo);
});

router.get('/resume', function(req, res, next) {
  let dmToggle = checkDarkMode(req, res, next);

  renderView(req, res, next,
    'Resume',
    'resume',
    resInfo);
});

router.get('/contact', function(req, res, next) {
  let dmToggle = checkDarkMode(req, res, next);

  renderView(req, res, next,
    'Contact',
    'contact');
});

router.get('/darkMode', function(req, res, next) {
  // Generate random number up to 10
  const index = Math.floor((Math.random() * 9));
  const pickString = randomString[index];

  pathArray = req.header('Referer').split('/');
  let prevTitle = '';
  let pathString = '';

  switch (pathArray[3]) {
    case 'resume':
      prevTitle = 'Resume';
      pathString = 'resume';
      break;

    case 'portfolio':
      prevTitle = 'Portfolio';
      pathString = 'portfolio';
      break;

    case 'contact':
      prevTitle = 'Contact';
      pathString = 'contact';
      break;

    default:
      prevTitle = 'Mark Langenhorst Portfolio';
      pathString = 'index';
      break;
  }

  let dmToggle = req.session;
  if (dmToggle.DarkModeOn === true){
    dmToggle.DarkModeOn = false;
  } else {
    dmToggle.DarkModeOn = true;
  }

  let pageInfo = '';
  if(pathString === 'portfolio'){
    pageInfo = portInfo;
  } else if(pathString === 'resume'){
    pageInfo = resInfo;
  }

  dmToggle = checkDarkMode(req, res, next);

  renderView(req, res, next,
    prevTitle,
    pathString,
    pageInfo,
    pickString);
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

function renderView(req, res, next, title, view, pageInfo, string){
  let dmToggle = req.session;

  res.render(view, {
    navbarClass: dmToggle.navbarClass,
    headerLogo: dmToggle.headerLogo,
    imageClass: 'logo',
    bodyClass: dmToggle.bodyClass,
    mainLogo: dmToggle.mainLogo,
    title: title,
    randomString: string,
    pageInfo: pageInfo,
    dmBtn: dmToggle.button,
    facebook: dmToggle.facebook,
    twitter: dmToggle.twitter,
    linkedin: dmToggle.linkedin,
    google: dmToggle.google,
  });
}

module.exports = router;
