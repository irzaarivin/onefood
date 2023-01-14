/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
  "use strict";
  // ==============================================================
  // Newsletter
  // ==============================================================

  var chart2 = new Chartist.Bar(
    ".amp-pxl",
    {
      labels: ["Nasi Padang Barokah", "Nasi Bebek Madura", "Aneka Jus Buah", "TokoMen", "Super Boba", "BakMie", "Burcang"],
      series: [
        [840000, 560000, 280000, 1500000, 2200000, 2010000, 280000],
      ],
    },
    {
      axisX: {
        // On the x-axis start means top and end means bottom
        position: "end",
        showGrid: false,
      },
      axisY: {
        // On the y-axis start means left and end means right
        position: "start",
        high: "2200000",
        low: "0",
      },
      
      plugins: [Chartist.plugins.tooltip()],
    }
  );

  var chart = [chart2];
});
