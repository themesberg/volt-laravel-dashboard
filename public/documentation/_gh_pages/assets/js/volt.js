/*

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal. Contact us if you want to remove it.

*/

"use strict";
document.addEventListener("DOMContentLoaded", function (event) {

  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-primary me-3',
      cancelButton: 'btn btn-gray'
    },
    buttonsStyling: false
  });

  // options
  const breakpoints = {
    sm: 540,
    md: 720,
    lg: 960,
    xl: 1140
  };

  var preloader = document.querySelector('.preloader');
  if (preloader) {
    setTimeout(function () {
      preloader.classList.add('show');

      setTimeout(function () {
        document.querySelector('.loader-element').classList.add('hide');
      }, 200);
    }, 1000);
  }

  var sidebar = document.getElementById('sidebarMenu');
  var content = document.getElementsByClassName('content')[0];
  if (sidebar && document.body.clientWidth < breakpoints.lg) {
    sidebar.addEventListener('shown.bs.collapse', function () {
      document.querySelector('body').style.position = 'fixed';
    });
    sidebar.addEventListener('hidden.bs.collapse', function () {
      document.querySelector('body').style.position = 'relative';
    });
  }

  var iconNotifications = document.querySelector('.icon-notifications');
  if (iconNotifications) {
    var unreadNotifications = document.querySelector('.unread-notifications');
    var bellShake = document.querySelector('.bell-shake');

    if (iconNotifications.getAttribute('data-unread-notifications') === 'true') {
      unreadNotifications.style.display = 'block';
    } else {
      unreadNotifications.style.display = 'none';
    }

    // bell shake
    var shakingInterval = setInterval(function () {
      if (iconNotifications.getAttribute('data-unread-notifications') === 'true') {
        if (bellShake.classList.contains('shaking')) {
          bellShake.classList.remove('shaking');
        } else {
          bellShake.classList.add('shaking');
        }
      }
    }, 5000);

    iconNotifications.addEventListener('show.bs.dropdown', function () {
      bellShake.setAttribute('data-unread-notifications', false);
      clearInterval(shakingInterval);
      bellShake.classList.remove('shaking');
      unreadNotifications.style.display = 'none';
    });
  }

  [].slice.call(document.querySelectorAll('[data-background]')).map(function (el) {
    el.style.background = 'url(' + el.getAttribute('data-background') + ')';
  });

  [].slice.call(document.querySelectorAll('[data-background-lg]')).map(function (el) {
    if (document.body.clientWidth > breakpoints.lg) {
      el.style.background = 'url(' + el.getAttribute('data-background-lg') + ')';
    }
  });

  [].slice.call(document.querySelectorAll('[data-background-color]')).map(function (el) {
    el.style.background = 'url(' + el.getAttribute('data-background-color') + ')';
  });

  [].slice.call(document.querySelectorAll('[data-color]')).map(function (el) {
    el.style.color = 'url(' + el.getAttribute('data-color') + ')';
  });

  //Tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  // Popovers
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
  })

  // Datepicker
  var datepickers = [].slice.call(document.querySelectorAll('[data-datepicker]'))
  var datepickersList = datepickers.map(function (el) {
    return new Datepicker(el, {
      buttonClass: 'btn'
    });
  })


  // DataTables
  var dataTableEl = document.getElementById('datatable');
  if (dataTableEl) {
    const dataTable = new simpleDatatables.DataTable(dataTableEl);
  }

  if (document.querySelector('.input-slider-container')) {
    [].slice.call(document.querySelectorAll('.input-slider-container')).map(function (el) {
      var slider = el.querySelector(':scope .input-slider');
      var sliderId = slider.getAttribute('id');
      var minValue = slider.getAttribute('data-range-value-min');
      var maxValue = slider.getAttribute('data-range-value-max');

      var sliderValue = el.querySelector(':scope .range-slider-value');
      var sliderValueId = sliderValue.getAttribute('id');
      var startValue = sliderValue.getAttribute('data-range-value-low');

      var c = document.getElementById(sliderId),
        id = document.getElementById(sliderValueId);

      noUiSlider.create(c, {
        start: [parseInt(startValue)],
        connect: [true, false],
        //step: 1000,
        range: {
          'min': [parseInt(minValue)],
          'max': [parseInt(maxValue)]
        }
      });
    });
  }

  if (document.getElementById('input-slider-range')) {
    var c = document.getElementById("input-slider-range"),
      low = document.getElementById("input-slider-range-value-low"),
      e = document.getElementById("input-slider-range-value-high"),
      f = [d, e];

    noUiSlider.create(c, {
      start: [parseInt(low.getAttribute('data-range-value-low')), parseInt(e.getAttribute('data-range-value-high'))],
      connect: !0,
      tooltips: true,
      range: {
        min: parseInt(c.getAttribute('data-range-value-min')),
        max: parseInt(c.getAttribute('data-range-value-max'))
      }
    }), c.noUiSlider.on("update", function (a, b) {
      f[b].textContent = a[b]
    });
  }

  //Chartist

  if (document.querySelector('.line-chart')) {
    new Chartist.Line('.line-chart', {
      labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
      series: [
        [12, 9, 7, 8, 5],
        [2, 1, 3.5, 7, 3],
        [1, 3, 4, 5, 6]
      ]
    }, {
      fullWidth: true,
      chartPadding: {
        right: 40
      },
      plugins: [
        Chartist.plugins.tooltip()
      ]
    });
  }

  if (document.querySelector('.line-chart-filled')) {
    new Chartist.Line('.line-chart-filled', {
      labels: [1, 2, 3, 4, 5, 6, 7, 8],
      series: [
        [5, 9, 7, 8, 5, 3, 5, 4]
      ]
    }, {
      low: 0,
      showArea: true
    });
  }

  if (document.querySelector('.bar-chart')) {
    new Chartist.Bar('.bar-chart', {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      series: [
        [5, 4, 3, 7, 5, 10, 3],
        [3, 2, 9, 5, 4, 6, 4]
      ]
    }, {
      low: 0,
      showArea: true,
      plugins: [
        Chartist.plugins.tooltip()
      ],
      axisX: {
        // On the x-axis start means top and end means bottom
        position: 'end'
      },
      axisY: {
        // On the y-axis start means left and end means right
        showGrid: false,
        showLabel: false,
        offset: 0
      }
    });
  }

  if (document.querySelector('.pie-chart')) {
    var data = {
      series: [30, 40, 10, 20]
    };

    var sum = function (a, b) { return a + b };

    new Chartist.Pie('.pie-chart', data, {
      labelInterpolationFnc: function (value) {
        return Math.round(value / data.series.reduce(sum) * 100) + '%';
      },
      low: 0,
      high: 8,
      fullWidth: false,
      plugins: [
        Chartist.plugins.tooltip()
      ],
    });
  }

  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 500,
    speedAsDuration: true
  });

  // SVG Map
  if (document.querySelector('#map')) {
    new svgMap({
      targetElementID: 'map',
      colorMin: '#FCE1C3',
      colorMax: '#F8BD7A',
      flagType: 'emoji',
      data: {
        data: {
          visitors: {
            name: 'Visitors',
            format: '{0} visitors',
            thousandSeparator: ',',
            thresholdMax: 500000,
            thresholdMin: 0
          },
          change: {
            name: 'Change by month',
            format: '{0} %'
          }
        },
        applyData: 'visitors',
        values: {
          US: { visitors: 272109, change: 4.73 },
          CA: { visitors: 160064, change: 11.09 },
          DE: { visitors: 120048, change: -2.3 },
          GB: { visitors: 110048, change: 3.3 },
          FR: { visitors: 100048, change: 1.3 },
          ES: { visitors: 90048, change: 1.5 },
          JP: { visitors: 56022, change: 3.5 },
          IT: { visitors: 48019, change: 1 },
          NL: { visitors: 40016, change: 2 },
          RU: { visitors: 30016, change: 3.4 },
          CN: { visitors: 50016, change: 6 },
          IN: { visitors: 140016, change: 2 },
          BR: { visitors: 40016, change: 5 },
          // ...
        }
      }
    });
  }

  // Dropzone
  if (document.querySelector('myDropzone')) {
    // Dropzone class:
    var myDropzone = new Dropzone("div#myId", { url: "/file/post" });
  }

  // Full Calendar
  var calendarEl = document.getElementById('calendar');
  if (calendarEl) {

    var events = [
      {
        id: 1,
        title: 'Call with Jane',
        start: '2020-11-18',
        end: '2020-11-19',
        className: 'bg-red'
      },

      {
        id: 2,
        title: 'Dinner meeting',
        start: '2020-11-21',
        end: '2020-11-22',
        className: 'bg-orange'
      },

      {
        id: 3,
        title: 'HackTM conference',
        start: '2020-11-29',
        end: '2020-11-30',
        className: 'bg-green'
      },

      {
        id: 4,
        title: 'Meeting with John',
        start: '2020-12-01',
        end: '2020-12-02',
        className: 'bg-blue'
      },

      {
        id: 5,
        title: 'Summer Hackaton',
        start: '2020-12-03',
        end: '2020-12-04',
        className: 'bg-purple'
      },

      {
        id: 6,
        title: 'Digital event',
        start: '2020-12-07',
        end: '2020-12-09',
        className: 'bg-info'
      },

      {
        id: 7,
        title: 'Marketing event',
        start: '2020-12-10',
        end: '2020-12-11',
        className: 'bg-blue'
      },

      {
        id: 8,
        title: 'Dinner with Parents',
        start: '2020-12-19',
        end: '2020-12-20',
        className: 'bg-red'
      },

      {
        id: 9,
        title: 'Black Friday',
        start: '2020-12-23',
        end: '2020-12-24',
        className: 'bg-yellow'
      },

      {
        id: 10,
        title: 'Cyber Week',
        start: '2020-12-02',
        end: '2020-12-03',
        className: 'bg-red'
      }
    ];

    var addNewEventModalEl = document.getElementById('modal-new-event');
    var addNewEventModal = new bootstrap.Modal(addNewEventModalEl);
    var newEventTitleInput = document.getElementById('eventTitle');
    var newEventStartDatepicker = new Datepicker(document.getElementById('dateStart'), { buttonClass: 'btn' });
    var newEventEndDatepicker = new Datepicker(document.getElementById('dateEnd'), { buttonClass: 'btn' });

    var editEventModalEl = document.getElementById('modal-edit-event');
    var editEventModal = new bootstrap.Modal(editEventModalEl);
    var editEventTitleInput = document.getElementById('eventTitleEdit');
    var editEventStartDatepicker = new Datepicker(document.getElementById('dateStartEdit'), { buttonClass: 'btn' });
    var editEventEndDatepicker = new Datepicker(document.getElementById('dateEndEdit'), { buttonClass: 'btn' });

    // current id selection
    var currentId = null;

    var calendar = new FullCalendar.Calendar(calendarEl, {
      selectable: true,
      initialView: 'dayGridMonth',
      themeSystem: 'bootstrap',
      initialDate: '2020-12-01',
      editable: true,
      events: events,
      dateClick: function (e) {
        addNewEventModal.show();
        newEventTitleInput.value = '';
        newEventStartDatepicker.setDate(e.date);
        newEventEndDatepicker.setDate(e.date.setDate(e.date.getDate() + 1));

        addNewEventModalEl.addEventListener('shown.bs.modal', function () {
          newEventTitleInput.focus();
        });
      },
      eventClick: function (info, element) {
        // set current id
        currentId = info.event.id;
        editEventTitleInput.value = info.event.title;
        editEventStartDatepicker.setDate(info.event.start);
        editEventEndDatepicker.setDate(info.event.end ? info.event.end : info.event.start);

        editEventModal.show();
        editEventModalEl.addEventListener('shown.bs.modal', function () {
          editEventTitleInput.focus();
        });
      }
    });
    calendar.render();

    document.getElementById('addNewEventForm').addEventListener('submit', function (event) {
      event.preventDefault();
      calendar.addEvent({
        id: Math.random() * 10000, // this should be a unique id from your back-end or API
        title: newEventTitleInput.value,
        start: moment(newEventStartDatepicker.getDate()).format('YYYY-MM-DD'),
        end: moment(newEventEndDatepicker.getDate()).format('YYYY-MM-DD'),
        className: 'bg-secondary',
        dragabble: true
      });
      addNewEventModal.hide();
    });

    document.getElementById('editEventForm').addEventListener('submit', function (event) {
      event.preventDefault();
      var editEvent = calendar.getEventById(currentId);
      var startDate = moment(editEventStartDatepicker.getDate()).format('YYYY-MM-DD');
      var endDate = moment(editEventEndDatepicker.getDate()).format('YYYY-MM-DD')

      editEvent.setProp('title', editEventTitleInput.value);
      editEvent.setStart(startDate);
      editEvent.setEnd(endDate);
      editEventModal.hide();
    });

    document.getElementById('deleteEvent').addEventListener('click', function () {
      swalWithBootstrapButtons.fire({
        icon: 'error',
        title: 'Confirm deletion',
        text: 'Are you sure you want to delete this event?',
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: 'No, cancel!',
      }).then(function (result) {
        if (result.value) {
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'The event has been deleted',
            'success'
          );
          calendar.getEventById(currentId).remove();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          editEventModal.hide();
        }
      })
    });
  }

  if (document.querySelector('.current-year')) {
    document.querySelector('.current-year').textContent = new Date().getFullYear();
  }

  // Glide JS

  if (document.querySelector('.glide')) {
    new Glide('.glide', {
      type: 'carousel',
      startAt: 0,
      perView: 3
    }).mount();
  }

  if (document.querySelector('.glide-testimonials')) {
    new Glide('.glide-testimonials', {
      type: 'carousel',
      startAt: 0,
      perView: 1,
      autoplay: 2000
    }).mount();
  }

  if (document.querySelector('.glide-clients')) {
    new Glide('.glide-clients', {
      type: 'carousel',
      startAt: 0,
      perView: 5,
      autoplay: 2000
    }).mount();
  }

  if (document.querySelector('.glide-news-widget')) {
    new Glide('.glide-news-widget', {
      type: 'carousel',
      startAt: 0,
      perView: 1,
      autoplay: 2000
    }).mount();
  }

  if (document.querySelector('.glide-autoplay')) {
    new Glide('.glide-autoplay', {
      type: 'carousel',
      startAt: 0,
      perView: 3,
      autoplay: 2000
    }).mount();
  }

  /*

  Check out the styles here: https://www.mapbox.com/maps/streets
  To change the style of the map change the mapboxId attribute with the following available styles:

  mapbox/dark-v10, mapbox/light-v10, mapbox/streets-v11, mapbox/outdoors/v-11, mapbox/satellite-streets-v11

  This is based on the URL you can when clicking on the preview link from Mapbox.

  You need to generate your own mapboxToken by creating an account. This token will NOT work for your website, you need to generate your own one!

  */

  var config = {
    mapboxToken: 'pk.eyJ1Ijoiem9sdGFudGhlbWVzYmVyZyIsImEiOiJjazZqaWUwcWswYTBvM21td2Jmcm5mYmdyIn0.7_5YCbbOFRnvqZzCNDo9fw',
    mapboxId: 'mapbox/light-v10'
  };

  var baseLatLng = [37.57, -122.26];
  var zoom = 10;
  var listings = [
    {
      url: '#',
      latLng: [37.70, -122.41],
      name: 'Call with Jane',
      date: 'Tomorrow at 12:30 PM'
    },
    {
      url: '#',
      latLng: [37.59, -122.39],
      name: 'HackTM conference',
      date: 'In about 5 minutes'
    },
    {
      url: '#',
      latLng: [37.52, -122.29],
      name: 'Marketing event',
      date: 'Today at 1:00 PM'
    },
    {
      url: '#',
      latLng: [37.37, -122.12],
      name: 'Dinner with partners',
      date: 'In 2 hours'
    },
    {
      url: '#',
      latLng: [37.36, -121.94],
      name: 'Interview with Google',
      date: 'In two days at 15:00 PM'
    }
  ];

  if (document.querySelector('#mapbox')) {

    var icon = L.icon({
      iconUrl: '../assets/img/marker.svg',
      iconSize: [38, 95], // size of the icon
      shadowSize: [50, 64], // size of the shadow
      iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
      shadowAnchor: [4, 62],  // the same for the shadow
      popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    // modal listing view
    var mapListings = L.map('mapbox').setView(baseLatLng, zoom);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: config.mapboxId,
      accessToken: config.mapboxToken
    }).addTo(mapListings);

    listings.map(function (listing, index) {
      var popupHtml = `
                <a href="${listing.url}" class="card card-article-wide border-0 flex-column no-gutters no-hover">
                    <div class="card-body py-0 d-flex flex-column justify-content-between col-12">
                        <h4 class="h5 fw-normal mb-2">${listing.name}</h4>
                        <div class="d-flex"><div class="icon icon-xs icon-tertiary me-2"><span class="fas fa-clock"></span></div><div class="font-xs text-dark">${listing.date}</div></div>
                    </div>
                </a>
            `;

      var marker = L.marker(listing.latLng, { icon: icon }).addTo(mapListings);
      marker.bindPopup(popupHtml);
    });
  }

  // Choices.js
  var selectStateInputEl = document.querySelector('#state');
  if (selectStateInputEl) {
    const choices = new Choices(selectStateInputEl);
  }

  //Sortable Js
  if (document.body.clientWidth > breakpoints.lg) {
    var kanbanColumn1 = document.getElementById('kanbanColumn1');
    if (kanbanColumn1) {
      new Sortable(kanbanColumn1, {
        group: "shared",
      });
    }

    var kanbanColumn2 = document.getElementById('kanbanColumn2');
    if (kanbanColumn2) {
      new Sortable(kanbanColumn2, {
        group: "shared",
      });
    }

    var kanbanColumn3 = document.getElementById('kanbanColumn3');
    if (kanbanColumn3) {
      new Sortable(kanbanColumn3, {
        group: "shared",
      });
    }

    var kanbanColumn4 = document.getElementById('kanbanColumn4');
    if (kanbanColumn4) {
      new Sortable(kanbanColumn4, {
        group: "shared",
      });
    }
  }

  if (document.getElementById('notifyTopLeft')) {
    document.getElementById('notifyTopLeft').addEventListener('click', function () {
      const notyf = new Notyf({
        position: {
          x: 'left',
          y: 'top',
        },
        types: [
          {
            type: 'info',
            background: 'blue',
            icon: {
              className: 'fas fa-info-circle',
              tagName: 'span',
              color: '#fff'
            },
            dismissible: false
          }
        ]
      });
      notyf.open({
        type: 'info',
        message: 'Send us <b>an email</b> to get support'
      });
    });
  }

  if (document.getElementById('basicAlert')) {
    document.getElementById('basicAlert').addEventListener('click', function () {
      Swal.fire(
        'Basic alert',
        'You clicked the button!'
      )
    });
  }

  if (document.getElementById('errorAlert')) {
    document.getElementById('errorAlert').addEventListener('click', function () {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        footer: '<a href>Why do I have this issue?</a>'
      })
    });
  }

  // multiple
  var selectStatesInputEl = document.querySelector('#states');
  if (selectStatesInputEl) {
    const choices = new Choices(selectStatesInputEl);
  }

  // Pricing countup
  var billingSwitchEl = document.getElementById('billingSwitch');
  if (billingSwitchEl) {
    const countUpStandard = new countUp.CountUp('priceStandard', 99, { startVal: 199 });
    const countUpPremium = new countUp.CountUp('pricePremium', 199, { startVal: 299 });

    billingSwitchEl.addEventListener('change', function () {
      if (billingSwitch.checked) {
        countUpStandard.start();
        countUpPremium.start();
      } else {
        countUpStandard.reset();
        countUpPremium.reset();
      }
    });
  }

  if (sidebar) {
    if (localStorage.getItem('sidebar') === 'contracted') {
      sidebar.classList.add('notransition');
      content.classList.add('notransition');

      sidebar.classList.add('contracted');

      setTimeout(function () {
        sidebar.classList.remove('notransition');
        content.classList.remove('notransition');
      }, 500);

    } else {
      sidebar.classList.add('notransition');
      content.classList.add('notransition');

      sidebar.classList.remove('contracted');

      setTimeout(function () {
        sidebar.classList.remove('notransition');
        content.classList.remove('notransition');
      }, 500);
    }

    var sidebarToggle = document.getElementById('sidebar-toggle');
    sidebarToggle.addEventListener('click', function () {
      if (sidebar.classList.contains('contracted')) {
        sidebar.classList.remove('contracted');
        localStorage.removeItem('sidebar', 'contracted');
      } else {
        sidebar.classList.add('contracted');
        localStorage.setItem('sidebar', 'contracted');
      }
    });

    sidebar.addEventListener('mouseenter', function () {
      if (localStorage.getItem('sidebar') === 'contracted') {
        if (sidebar.classList.contains('contracted')) {
          sidebar.classList.remove('contracted');
        } else {
          sidebar.classList.add('contracted');
        }
      }
    });

    sidebar.addEventListener('mouseleave', function () {
      if (localStorage.getItem('sidebar') === 'contracted') {
        if (sidebar.classList.contains('contracted')) {
          sidebar.classList.remove('contracted');
        } else {
          sidebar.classList.add('contracted');
        }
      }
    });
  }

});
