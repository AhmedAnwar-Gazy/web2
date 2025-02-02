<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aroma mart</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
<!-- 
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@500&family=Fira+Sans:wght@300&family=Handjet:wght@300&family=Merriweather&family=Montserrat:wght@300&family=Noto+Sans:wght@300&family=REM:wght@300&family=Roboto:wght@300&display=swap");

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    :root {
      /* colors  */
      /* --bgcolor: #262626; */
      --bgcolor: rgb(244 244 245);
      --bgcolorh: rgb(24 24 27);
      --box-bgcolor: rgb(244 244 245);
      /* --box-color: ; */
      --box-hovercolor: #636363;
      --main-color: #ffffff;
      --header-bgcolor: #000000;
      --searchbar-color: linear-gradient(to bottom right,
          var(--header-bgcolor),
          #ffffff,
          var(--header-bgcolor));
      --searchbutten-color: #ffffff;
      --higelight-color: #4187e5;
      --button-color: var(--bgcolor);
      --button-hovercolor: #333;
      --attention-bgcoler: #f97316;
      --saving-bgcoler: #cc4100;
      --sheping-color: #adadad;
      --font-color: #fff;
      --font-colorH: #000000;
      --footer-bgcolor: #6e6e6e;
      --icon-bgcolor: linear-gradient(#fff, rgb(169, 169, 252));
      --about-colore: rgb(244 244 245);

      /* genral/margin  */
      --padding-s: 0.5em;
      --padding-m: 1em;
      --padding-l: 1.5em;
      --margin-s: 0.5em;
      --margin-m: 1em;
      --margin-l: 1.5em;

      /* header  */
      --header-hight: 4.8rem;
      --header-fontsize: 1.5em;
      --hero-color: linear-gradient(#06b6d4, #14b8a6);

      /* box  */
      --hero__box-height: 200px;
    }


    @media (prefers-color-scheme: Light) {

      :root {
        /* colors  */
        /* --bgcolor: #262626; */
        --bgcolor: rgb(244 244 245);
        --bgcolorh: rgb(24 24 27);
        --box-bgcolor: rgb(255, 255, 255);
        /* --box-color: ; */
        --box-hovercolor: rgb(250 250 250);
        --main-color: #ffffff;
        --header-bgcolor: #000000;
        --searchbar-color: linear-gradient(to bottom right,
            var(--header-bgcolor),
            #ffffff,
            var(--header-bgcolor));
        --searchbutten-color: #ffffff;
        --higelight-color: #ffffff;
        --button-color: var(--bgcolor);
        --button-hovercolor: #333;
        --attention-bgcoler: #f97316;
        --saving-bgcoler: #cc4100;
        --sheping-color: #ffffff;
        --font-color: #000000;
        --font-colorH: #ffffff;
        --footer-bgcolor: #ffffff;
        --icon-bgcolor: linear-gradient(#fff, rgb(169, 169, 252));
        --about-colore: #ffffff;

        /* genral/margin  */
        --padding-s: 0.5em;
        --padding-m: 1em;
        --padding-l: 1.5em;
        --margin-s: 0.5em;
        --margin-m: 1em;
        --margin-l: 1.5em;

        /* header  */
        --header-hight: 4.8rem;
        --header-fontsize: 1.5em;
        --hero-color: linear-gradient(#06b6d4, #14b8a6);

        /* box  */
        --hero__box-height: 200px;
      }
    }

    @media (prefers-color-scheme: dark) {
      :root {
        /* colors  */
        /* --bgcolor: #262626; */
        --bgcolor: #171717;
        --box-bgcolor: #262626;
        /* --box-color: ; */
        --box-hovercolor: rgb(63 63 70);
        --main-color: #ff00dd;
        --header-bgcolor: #000000;
        --searchbar-color: rgb(255, 255, 255);

        ;
        --searchbutten-color: #ffffff;
        --higelight-color: #ffffff;
        --button-color: var(--bgcolor);
        --button-hovercolor: #333;
        --attention-bgcoler: #f97316;
        --saving-bgcoler: #cc4100;
        --sheping-color: #1061cd;
        --font-color: #fff;
        --font-colorH: #000000;
        --footer-bgcolor: #6e6e6e;
        --icon-bgcolor: linear-gradient(#fff, rgb(169, 169, 252));
        --about-colore: #6693E9;

        /* genral/margin  */
        --padding-s: 0.5em;
        --padding-m: 1em;
        --padding-l: 1.5em;
        --margin-s: 0.5em;
        --margin-m: 1em;
        --margin-l: 1.5em;

        /* header  */
        --header-hight: 4.8rem;
        --header-fontsize: 1.5em;
        --hero-color: linear-gradient(#06b6d4, #14b8a6);

        /* box  */
        --hero__box-height: 200px;
      }

    }



    html {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background-color: var(--bgcolor);
      background-repeat: no-repeat;
      height: 200vh;
      color: var(--font-color);
    }

    img,
    video {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 5px;
    }

    button {
      background: none;
      cursor: pointer;
      border: 0;
    }

    a,
    button,
    input {
      font: inherit;
      color: inherit;
      text-decoration: none;
    }

    /* #### heder #### */
    .header__box {
      box-shadow: 0 0 2px rgba(100, 100, 100, 1);
      height: var(--header-hight);
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 0.5rem;
      font-size: var(--header-fontsize);
      background-color: var(--header-bgcolor);

      & a {
        height: 90%;
        display: flex;
        align-items: center;
        background-image: radial-gradient(silver 30%, #84bff7 30%, var(--header-bgcolor), transparent);

      }

      & img {
        top: 15px;
        height: 80%;
        width: auto;


      }
    }

    /* nesting  */
    .header__button {
      cursor: pointer;
      /* font-size: var(--font-size); */
      height: 3.5rem;
      width: auto;
      padding: 0.5rem 1.0rem;
      gap: 1rem;
      border-radius: 50px;
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: var(--header-bgcolor);
      color: #fff;
      border: none;



      & .pargrph__head {
        text-align: left;
        font-weight: 200;
        font-size: 0.9rem;
        color: #999;
      }

      & .pargrph__body {
        font-size: 1rem;
        font-weight: 800;
        white-space: nowrap;
        color: #ffffff;
      }


      &:hover {
        background-color: var(--bgcolorh);

      }

    }

    .bell-button i {
      animation-name: bell;
      animation: 1.5s linear 0 normal forwards bell;
      animation-iteration-count: infinite;
    }

    /* searchbar   */
    .search-bar {
      display: flex;
      border-radius: 30px;
      height: 3rem;
      padding: 0 1rem;
      width: var(--size);
      position: relative;
      transition: width 0.3s ease;
      overflow: hidden;
      color: var(--font-color);
      background-color: var(--header-bgcolor);

    }

    .search-bar__input {
      flex-grow: 1;
      font-size: 1rem;
      /* padding: 0 0.5em; */
      border: 0;
      opacity: 0;
      position: absolute;
      top: 0;
      bottom: 0;
      line-height: calc(var(--size)-3px);
      cursor: pointer;
      width: calc(90% - 3rem);
      background-color: transparent;

    }

    .search-bar__input:focus {
      outline: 0;
    }

    .search-bar__submit {
      /* color:var(--font-color); */
      /* font-size: 1.5rem; */
      cursor: pointer;
      border: 0;
      background: transparent;
      border-radius: 50%;
      /* background-color: pink; */
      width: calc(var(--size) - 8px);
      height: calc(var(--size) - 8px);
      margin-left: auto;
      transition: 150ms ease-in-out;
    }

    .search-bar:focus-within {
      width: 100%;
      background-image: var(--searchbar-bgcolor);
      outline: 2px solid var(--higelight-color);
      outline-offset: -1px;

      .search-bar__input {
        opacity: 1;
        cursor: initial;
      }

      .search-bar__submit {
        /* background: var(--primary); */
        color: white;
      }
    }



    @keyframes bell {
      0% {
        transform: rotate(0deg);
      }

      25% {
        transform: rotate(45deg);
      }

      50% {
        transform: rotate(0deg);
      }

      75% {
        transform: rotate(-45deg);
      }

      100% {
        transform: rotate(0deg);
      }
    }




    /*-----------------------------------------*/
    .return {
      display: none;
    }

    .header__pargrph-user,
    .header__pargrph-location {
      display: none;
    }

    .products {
      padding: 2rem;
      display: grid;
      grid-template-columns: 1fr;
      grid-auto-flow: row;
      gap: 1rem;
      width: 100%;
    }


    .product {
      display: flex;
      flex-flow: column;
      justify-content: center;
      align-items: center;
      border: none solid #000000;
      color: var(--font-color);
      background-color: var(--box-bgcolor);
      border-radius: 5px;
      padding-right: 10px;
      padding-left: 10px;
      margin-bottom: 5px;
      box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    }

    .product:hover {
      background-color: var(--box-hovercolor);
    }

    .product button {
      background-color: #000;
      color: #fff;
      font-weight: bold;
      font-size: 1.3rem;
      width: 90%;
      height: 40px;
      margin-bottom: 15px;
      border-radius: 5px;
    }

    .product button:hover {
      background-color: #fff;
      color: #000;

    }

    .product h3 {
      color: var(--font-color);
      font-weight: bold;
      font-size: 1rem;
      width: 100%;

    }

    .ziad {
      font-weight: bold;
    }

    .product p {
      color: var(--font-color);
      width: 100%;
      font-size: 1rem;
      margin: 0.5rem 0;
      display: block;

    }





    @media screen and (min-width:640px) {
      .header__pargrph-user {
        display: block;
      }

      .products {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-auto-flow: row;
      }
    }

    @media screen and (min-width:840px) {
      .return {
        display: block;
      }

      .search-bar {
        background-image: var(--searchbar-color);
        font-size: 1rem;
        height: 2.8em;
        width: 30%;
        border-radius: 25px;
        padding: 0 0 0 1rem;
        display: flex;
        background-image: var(--searchbar-color);

        & input {
          height: 100%;
          width: 80%;
          background-color: transparent;
          border: 0;
          outline: 0;
        }

        & button {
          height: 100%;
          width: max(70px, 15%);
          color: var(--font-color);
          border: 0;
          background-color: var(--searchbutten-color);
          color: var(--header-bgcolor);
          cursor: pointer;
          margin-left: auto;
          border-radius: 25px;
        }

        &:hover {
          outline: 2px solid var(--searchbutten-color);
          outline-offset: -1px;
        }

      }

      .products {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-auto-flow: row;
      }

    }

    @media screen and (min-width:1024px) {
      .header__pargrph-location {
        display: block;
      }

      .products {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-auto-flow: row;
      }
    }

    /* ### end of header ### */







    /* hearo  */

    .hero__image {
      /* margin-top: var(--header-hight); */

      width: 100%;
      height: 500px;
      height: clamp(495px, 40vw, 800px);
      /* height: 100vh ; */
      /* margin-top: var(--header-hight); */
      background-image: linear-gradient(transparent 60%, var(--bgcolor)),
        url(views/images/social.21446-1024x536.jpg);
      background-position: center;
      background-size: cover;

      margin-bottom: calc(0px - var(--hero__box-height));
      /* background-image: linear-gradient(rgba(0,0,0,0.1) , var(--bgcolor)); */
    }

    .hero__contenar {
      margin: 2rem;
      ;
      display: grid;
      grid-auto-flow: column;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: max-content;

      align-items: center;
      gap: 1.5rem;
      /* background-color: #3b82f6; */
    }

    .hero__box {
      background-color: var(--box-bgcolor);
      border-radius: 10px;
    }

    .hero-one {
      background-image: url(views/images/social.21443-1024x536.jpg);
      background-size: cover;
      padding: 2rem 1rem;
      height: 100%;

      & h3 {
        font-size: 2rem;
        font-weight: 800;
        color: #06b6d4;
      }

      & p {
        font-size: 1rem;
        font-weight: 500;
        text-shadow: 2px 3px 5px black;
      }

      & button {
        /* height: 30px; */
        font-size: 1rem;
        font-weight: 700;
        background-color: var(--attention-bgcoler);
        border: none;
        border-radius: 50px;
        padding: 1rem;
        margin: 0.5rem 0;
      }
    }

    .hero-tow {
      display: flex;
      height: 100%;
      justify-content: space-between;
      padding: 1rem;
      gap: 1rem;
      font-size: 1rem;

      & P {
        text-align: center;
      }

      & button {
        max-width: 200px;
      }
    }

    .hero-three {
      height: 100%;

    }

    .hero__box-header {
      margin: 1rem 1rem 0 1rem;
      font-size: 1.5rem;
      font-style: italic;
    }

    .deal__item__image {
      /* height: 200px; */
      max-width: 500px;
      align-self: center;
    }


    /* main  */
    .iteam__image {
      background: none;
      border: none;
      background-color: #fff;
      border-radius: 10px;
      max-width: 100px;
      height: auto;
    }

    .iteam__link {
      text-decoration: none;
      font-size: 1rem;
    }

    .item__paragrph {
      line-height: 1.3;
      font-size: 0.8rem;
      font-weight: 700;
    }

    .item__saving {
      background-color: var(--saving-bgcoler);
      color: var(--bgcolor);
      display: inline-block;
      padding: 0 0.5rem;
      border-radius: 5px 0;
      transform: skew(-20deg, 0deg);

      & p {
        transform: skew(20deg, 0deg);
      }
    }

    .item__shepping {
      color: var(--saving-bgcoler);
      width: 700;
    }

    .item__paris {
      font-size: 1.5rem;
    }

    .item__spachal {
      background-color: #f59e0b;
      color: #431407;
      font-weight: 600;
      display: inline-block;
      padding: 0 0.5rem;
      border-radius: 5px 0;
      transform: skew(-20deg, 0deg);

      & p {
        transform: skew(20deg, 0deg);
      }
    }

    .tital__header {
      margin: 2rem 1rem 1rem 2rem;
      font-size: 2rem;
    }

    /* deal   */
    .section-deal {
      padding: 2rem;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }

    .deal__item {
      background-color: var(--box-bgcolor);
      border-radius: 10px;
      padding: 1.5rem;
      display: flex;

      justify-content: space-between;

    }

    .item__paragrph>* {
      margin: 0.2rem 0.2rem;
    }

    .deal-one {
      grid-row: 1/3;
      flex-direction: column;

    }

    .section-main {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      justify-content: space-between;
      margin: 2rem;
      gap: 1.5rem;
    }

    .item {
      padding: 1.5rem 2rem;
      border-radius: 10px;
      background-color: var(--box-bgcolor);
      display: grid;
    }


    /* panals  */
    .section-panals {
      display: flex;
      margin: 2rem;
      gap: 1.5rem;

    }

    .features img {
      height: 280px;
      object-fit: cover;

    }

    /* CATEGORIES   */
    .section-categories {
      background-color: var(--box-bgcolor);
      padding: 2rem;


      & h2 {
        margin: 0;
      }
    }

    .categories {
      display: grid;
      grid-auto-flow: column;
      /* grid-auto-columns: 10%; */
      overflow: auto;
      scroll-snap-type: inline mandatory;
    }

    .categories>* {
      scroll-snap-align: start;
    }

    .categorie {
      border-radius: 30px;
      margin: 0.5rem;
      padding: 1rem
    }

    .categorie:hover {
      background-color: var(--bgcolor);
    }

    .categorie__header {
      text-align: center;
      font-size: 0.8rem;
      text-decoration: none;
    }

    .categorie__image {
      min-width: 100px;
    }

    /* about  */
    .section-about {
      background-color: var(--box-bgcolor);
      color: var(--font-color);
      padding: 4rem;
      text-align: center;
      font-weight: 900;

      & h1 {
        font-size: 2rem;
      }

      & h2 {
        color: var(--font-color);
      }

      & h5 {
        color: var(--font-color);
        margin: 1rem;
      }

    }

    .about__box {
      text-align: left;
      display: grid;
      align-items: center;

      & p {
        font-size: 0.9rem;
        font-weight: 400;
      }

      & img {
        max-width: 300px;
        margin: auto;
      }

      &:last-child {
        grid-column: 4/6;
      }
    }

    .about__contenar {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      align-items: center;
      gap: 2rem;
    }

    .about__box>* {
      margin: 1rem;
    }

    .about__header {
      color: var(--about-colore);
    }

    ::-webkit-scrollbar {
      width: 15px;
    }

    ::-webkit-scrollbar-track {
      background-color: var(--box-hovercolor);

    }

    ::-webkit-scrollbar-thumb {
      background: var(--bgcolor);
      max-width: 100px;
    }


    @media (max-width :1024px) {

      .hero__contenar,
      .section-deal,
      .section-main,
      .about__contenar {
        grid-template-columns: repeat(2, 1fr);
      }

      .hero-three {
        display: none;
      }

      .about__box:last-child {
        grid-column: 2/3;
      }

    }

    @media (max-width :740px) {

      .section-deal,
      .section-main,
      .about__contenar {
        grid-template-columns: repeat(1, 1fr);
      }

      .hero__contenar,
      .hero-three {
        display: none;
      }

      .about__box:last-child {
        grid-column: 1/2;
      }

    }
  </style>
-->

<link rel="stylesheet" href="views/homes/home.css">


  <link
    href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet" />
</head>

<body>



  <header class="header__elemant">
    <div class="header__box">

      <button class="header__button">
        <i class="fa-solid fa-bars"></i>
      </button>

      <a href="#" class="logo"><img src="" alt="" height="60" width="40"></a>

      <button class="header__button user">
        <i class="fa-solid fa-location-dot"></i>
        <div class="header__pargrph-location">
          <p class="pargrph__head">Hello</p>
          <p class="pargrph__body">select address</p>
        </div>
      </button>


      <div class="search-bar">
        <input type="text" class="search-bar__input" placeholder="search" aria-label="search" name="search" id="search" />
        <button class="search-bar__submit"><i class="fa-solid fa-magnifying-glass" aria-label="submit search"></i></button>
      </div>

      <button class="header__button bell-button">
        <i class="fa-regular fa-bell"></i>
      </button>

      <button class="header__button user">
        <i class="fa-regular fa-user"></i>
        <div class="header__pargrph-user">
          <p class="pargrph__head">Welcome</p>
          <p class="pargrph__body">Sign IN / Register</p>
        </div>
      </button>
      <button class="header__button return">
        <div class="header__pargrph-return">
          <p class="pargrph__head">Returns</p>
          <p class="pargrph__body">& Orders</p>
      </button>
      <button class="header__button">
        <i class="fa-solid fa-cart-shopping"></i>
      </button>
    </div>
    </div>

  </header>

  <main class="main ord__elemant">
    <article class="main__article article-one">
      <section class="main__section section-hero">
        <div class="hero__image"></div>
        <div class="hero__contenar">
          <div class="hero__box hero-one">
            <h3>HOME SHOWCASE</h3>
            <p>Explore Home Upgrades for Every Room</p>
            <button class="hero__button">SHOP NOW</button>
          </div>

          <div class="hero__box">
            <h3 class="hero__box-header">CATEGORIS YOU MAY BE INTRSTED IN</h3>
            <div class="hero-tow">
              <div>
                <button class="iteam__image">
                  <img src="image/3_32.jpg" alt="" />
                </button>
                <a class="iteam__link" href="#">
                  <p>
                    Sauvage Eau Forte</p>
                </a>
              </div>
              <div>
                <button class="iteam__image">
                  <img src="image/3_58.jpg" alt="" />
                </button>
                <a class="iteam__link" href="#">
                  <p>
                    Sauvage Eau Forte</p>
                </a>
              </div>
              <div>
                <button class="iteam__image">
                  <img src="image/3_48.jpg" alt="" />
                </button>
                <a class="iteam__link" href="#">
                  <p>Dior
                    Sauvage Eau Forte</p>
                </a>
              </div>
            </div>
          </div>

          <div class="hero__box hero-three">
            <h3 class="hero__box-header">WE RECOMEND</h3>
            <div class="hero-tow">
              <div>
                <button class="iteam__image">
                  <img src="image/laptop.jpg" alt="" />
                </button>
                <a class="iteam__link" href="#">
                  <p>
                    Sauvage Eau Forte</p>
                </a>
              </div>
              <div>
                <button class="iteam__image">
                  <img src="image/psu.png" alt="" />
                </button>
                <a class="iteam__link" href="#">
                  <p>L'Interdit Absolu Intense</p>
                </a>
              </div>
              <div>
                <button class="iteam__image">
                  <img src="image/capl.png" alt="" />
                </button>
                <a class="iteam__link" href="#">
                  <p>L'Interdit Absolu Intense</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <h2 class="tital__header">TODAY'S BEST DEALS</h2>
      <section class="main__section section-deal">
        <div class="deal__item deal-one">
          <div class="item__paragrph">
            <h3 class="item__header">
              <a class="iteam__link" href="#">Yves Saint Laurent
                Libre Intense Eau de Parfum
                Women Perfume</a>
            </h3>
            <div class="item__saving">
              <p>Save 21%</p>
            </div>
            <div class="item__spachal">
              <p>Promotion Deal</p>
            </div>
            <h4 class="item__paris">$1,799</h4>
            <p class="item__shepping">FREE SHIPPING</p>
          </div>
          <div class="deal__item__image">
            <button><img src="image/pc.jpg" alt="" /></button>
          </div>
        </div>
        <div class="deal__item deal-tow">
          <div class="item__paragrph">
            <h3 class="item__header">
              <a class="iteam__link" href="#">Dior
                Hypnotic Poison Eau De Toilette
                Women Perfume</a>
            </h3>
            <div class="item__saving">
              <p></p>
            </div>
            <div class="item__spachal">
              <p>$5 Off W/ Code</p>
            </div>
            <h4 class="item__paris">$544</h4>
            <p class="item__shepping">FREE SHIPPING</p>
          </div>
          <div class="deal__item__image">
            <button><img src="image/cpu.jpg" alt="" /></button>
          </div>
        </div>

        <div class="deal__item deal-three">
          <div class="item__paragrph">
            <h3 class="item__header">
              <a class="iteam__link" href="#">Musc Et Jasmin Ellena
                Unisex Perfume</a>
            </h3>
            <div class="item__saving">
              <p>Save 21%</p>
            </div>
            <div class="item__spachal">
              <p></p>
            </div>
            <h4 class="item__paris">$550</h4>
            <p class="item__shepping">FREE SHIPPING</p>
          </div>
          <div class="deal__item__image">
            <button><img src="image/lap1.jpg" alt="" /></button>
          </div>
        </div>

        <div class="deal__item deal-four">
          <div class="item__paragrph">
            <h3 class="item__header">
              <a class="iteam__link" href="#">Mortal Kombat 11 Ultimate [Online Game Code]</a>
            </h3>
            <div class="item__saving">
              <p>Save 88%</p>
            </div>
            <div class="item__spachal">
              <p></p>
            </div>
            <h4 class="item__paris">$7</h4>
            <p class="item__shepping"></p>
          </div>
          <div class="deal__item__image">
            <button><img src="image/game.jpg" alt="" /></button>
          </div>
        </div>

        <div class="deal__item deal-five">
          <div class="item__paragrph">
            <h3 class="item__header">
              <a class="iteam__link" href="#">GAP $50 Gift Card (Email Delivery)</a>
            </h3>
            <div class="item__saving">
              <p></p>
            </div>
            <div class="item__spachal">
              <p>$10 Off W/ Code</p>
            </div>
            <h4 class="item__paris">$50</h4>
            <p class="item__shepping"></p>
          </div>

          <div class="deal__item__image">
            <button><img src="image/gap.png" alt="" /></button>
          </div>
        </div>
      </section>

      <section class="main__section section-main">
        <!-- 
          <div class="item item-one">
            <div class="item__image">
              <a href="#"> <img src="image/ssd.jpg" alt="" /> </a>
            </div>
            <div class="item__paragrph">
              <h3 class="item__header">
                <a class="iteam__link" href="#">
                  SAMSUNG PM9A3 2.5" U.2 7.68TB PCIe 4.0 x4 NVMe 1.4 V-NAND TLC
                  Enterprise Solid State
                </a>
              </h3>
              <div class="item__saving">
                <p>Save 7%</p>
              </div>
              <div class="item__spachal">
                <p>$10 GC W/ Purchase</p>
              </div>
              <h4 class="item__paris">$483</h4>
              <p class="item__shepping">FREE SHIPPING</p>
            </div>
          </div>

 -->

        <!--  ----------------------------------------------------------------   -->
        <!-- <hr> -->
      </section>
      <section class="products_grid">
        <div class="products">
          <!-- Products will be dynamically inserted here -->
        </div>
      </section>



    </article>
    <article class="main__article article-tow">
      <section class="main__section section-panals">
        <div class="panal">
          <a href="#"><img
              src="views/images/porto2.jpg"
              width="800"
              height="120"
              alt="PLAY BEYOND THE SCREEN" /></a>
        </div>
        <div class="panal">
          <a href="#"><img
              src="views/images/porto1.jpg"
              width="800"
              height="120"
              alt="NEXT LEVEL THRILLS" /></a>
        </div>
      </section>

      <section class="main__section section-categories">
        <h2 class="tital__header">CATEGORIES</h2>
        <div class="categories">
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.105.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">Software</h4>
              </a></button>
          </div>
          <div class="categorie">
            <button>
              <a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.1.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">Sporting Goods</h4>
              </a>
            </button>
          </div>
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.117.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">Drones</h4>
              </a></button>
          </div>
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.132.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">Automotive</h4>
              </a></button>
          </div>
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.136.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">TVs</h4>
              </a></button>
          </div>
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.138.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">Home Audio</h4>
              </a></button>
          </div>
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.146.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">Cell Phones</h4>
              </a></button>
          </div>
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.16.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">VR Headsets</h4>
              </a></button>
          </div>
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.182.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">Office Furniture</h4>
              </a></button>
          </div>
          <div class="categorie">
            <button><a href="#">
                <img
                  class="categorie__image"
                  src="views/images/nots/t.33.jpg"
                  width="160"
                  height="160"
                  alt="" />
                <h4 class="categorie__header">PCs & Monitors</h4>
              </a></button>
          </div>
        </div>
      </section>

      <br />
      <h2 class="tital__header">NEWEGG FEATURES</h2>
      <section class="main__section section-panals">
        <div class="features">
          <a href="#"><img
              src="views/images/main2.jpeg"
              alt="COLLEG TECHSENTIALS"
              title="COLLEG TECHSENTIALS" /></a>
        </div>
        <div class="features">
          <a href="#"><img
              src="views/images/main6.jpeg"
              alt="COLLEG TECHSENTIALS"
              title="COLLEG TECHSENTIALS" /></a>
        </div>
        <div class="features">
          <a href="#"><img
              src="views/images/main7.jpeg"
              alt="COLLEG TECHSENTIALS"
              title="COLLEG TECHSENTIALS" /></a>
        </div>
      </section>
      <br />
    </article>
    <article class="main__article article-three">
      <section class="main__section section-about">
        <h1>WHAT'S NOWEGG ?</h2>
          <a href="contactus.html">
            <h5>Learn more about Newegg > </h5>
          </a>
          <div class="about__contenar">
            <div class="about__box">
              <h2 class="about__header">The Leading Tech-Focused e-Retailer</h2>
              <p>
                Today, millions of customers turn to Newegg to shop for the
                latest PC components, consumer electronics, smart home, gaming
                products and more.
              </p>
              <img src="views/images/main3.jpeg" alt="" />
            </div>

            <div class="about__box">
              <h2 class="about__header">Reliable & Award-Winning Experience</h2>
              <p>
                Newegg is consistently ranked as one of the best online shopping destinations, and the company regularly earns industry-leading customer service ratings.
              </p>
              <img src="views/images/main4.jpeg" alt="" />
            </div>

            <div class="about__box">
              <img src="views/images/main5.jpeg" alt="" />
              <h2 class="about__header">Global Shopping</h2>
              <p>
                Newegg is based in North America, with a global reach in Europe, South America, Asia Pacific and the Middle East.
              </p>
            </div>

            <div class="about__box">
              <h2 class="about__header">Welcome To Newegg Studios!</h2>
              <p>
              </p>
              <video width="480" height="270" controls>
                <source src="views/images/VERSACE EROS   Perfume Commercial.mp4" type="video/mp4">
                <source src="views/images/Luxury Perfume Commercial 3D Animation.mp4" type="video/mp4">
              </video>

            </div>
          </div>
      </section>
      <section class="main__section section-tow"></section>
      <section class="main__section section-three"></section>
    </article>
  </main>

  <footer class="footer ord__elemant"></footer>
  <script src="views/homes/home.js"></script>
</body>

</html>