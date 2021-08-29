/**
 * External Dependencies
 */
import 'jquery';
import Alpine from 'alpinejs';

import { debounce } from 'underscore';

import Swiper, { Navigation, Pagination } from 'swiper';

Swiper.use([Navigation, Pagination]);

import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

Alpine.start();

$(() => {
  
  gsap.config({
    nullTargetWarn: false,
  });

  
});
