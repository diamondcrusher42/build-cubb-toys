require('./bootstrap');
import {createSlider3D, createSlider} from './carousel-slider';
import Tick from '@pqina/flip';
import './project-gallery';
import './project-tabs';

createSlider3D('.carousel-slider');
createSlider('.project-slider');

const projectCountDownEl = document.getElementById('project-count-down');

if (projectCountDownEl) {
  Tick.DOM.create(projectCountDownEl, {
    didInit: function (tick) {
      const counter = Tick.count.down('2023-01-01T00:00:00+01:00', {
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
