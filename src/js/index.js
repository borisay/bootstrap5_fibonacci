// import bootstrap from "bootstrap";

import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";
import "../styles/style.css";
import "../sass/style.scss";
import "../../node_modules/bootstrap-icons/font/bootstrap-icons.css";

window.addEventListener('load', (event) => {
  const search = document.querySelector(".search-block-form")
  document.querySelector(".search-block-form > div").classList.add("d-flex", "justify-content-center", "container");
  document.querySelector(".search-block-form div.form-item").classList.add("col-6");
  const opensearch = document.querySelector("div.open-search");
  opensearch.addEventListener('click', (e) => {
    e.preventDefault();
    search.classList.toggle("show")
  })

  // paragraph

  if (document.querySelector('.field-type-paragraphs')) {
    document.querySelector('.field-type-paragraphs > .field-items').classList.add("row");
  }
  let items = document.querySelectorAll('.field-type-paragraphs> .field-items > .field-item');
  for(let item of items){
    item.classList.add("col-xs-12","col-md-6","col-xl-4");
    item.children[0].classList.add('card')
    item.children[0].childNodes[1].classList.add('card-body')
    
    if (item.querySelector('.field-name-field-heading')){
      let title = item.querySelector('.field-name-field-heading .field-item').innerHTML
      item.querySelector('.field-name-field-heading .field-item').innerHTML = '<h3>' + title + '</h3>';
      item.querySelector('.field-name-field-heading .field-item').classList.add('card-title')
    }
    if (item.querySelector('.field-name-field-subtitle')){
      item.querySelector('.field-name-field-subtitle .field-item').classList.add('card-subtitle')
    }
    if (item.querySelector('.field-name-field-text')){
      item.querySelector('.field-name-field-text .field-item').classList.add('card-text')
    }
    if (item.querySelector('.field-name-field-block-image')) {
      item.querySelector('.field-name-field-block-image img').classList.add('card-img-top')
    }
  }
});
