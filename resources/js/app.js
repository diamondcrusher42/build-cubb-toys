require('./bootstrap');
import './main-menu';
import {createSlider3D, createSlider} from './carousel-slider';
import Tick from '@pqina/flip';
import './project-gallery';
import './project-tabs';
import './invest';

createSlider3D('.carousel-slider');
createSlider('.project-slider');

const projectCountDownEl = document.getElementById('project-count-down');

if (projectCountDownEl) {
  Tick.DOM.create(projectCountDownEl, {
    didInit: function (tick) {
      const counter = Tick.count.down(projectCountDownEl.dataset.date, {
        format: ['d', 'h', 'm', 's']
      });
      counter.onupdate = function (value) {
        value.forEach(function (part ,index) {
          if (this[index] < 10) {
            this[index] = '0' + this[index];
          }
        }, value);
        tick.value = value;
      };
    }
  });
}

