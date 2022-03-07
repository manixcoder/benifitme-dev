<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('public/adminAssets/images/header_logo.png')}}" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @if(Route::current()->uri == 'merchant/appointments-management/calendar-event' || Route::current()->uri == 'appointments-management/{$id}/edit')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/Fonts/font.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/style.css')}}">
    @else
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/Fonts/font.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/merchemtAssets/css/style.css')}}">
    @endif



    @yield('pageCss')
    <title>{{ config('app.name', 'Laravel') }} @yield('pageTitle')</title>
</head>

<body>
    <header>
        <div class="benefitme">
            <div class="col-md-6 col-sm-6 ">
                <img src="{{ asset('public/merchemtAssets/images/header_logo.png')}}" alt="header_logo" width="230px">
            </div>

            <div class="col-md-6 col-sm-6 text-right">
                <div class="user-dropdown">
                    <div class="dropdown">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>
                                <img src="{{ asset('public/merchemtAssets/images/circle.jpg')}}" alt="circle" width="60px">
                            </span>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li>
                                <a href="{{ url('merchant/profile-view') }}">
                                    <img src="{{ asset('public/merchemtAssets/images/my_profile.png')}}" alt="my_profile" width="15px">
                                    My profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <img src="{{ asset('public/merchemtAssets/images/logout.png')}}" alt="logout" width="15px">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="side-bar text-left">
        <ul>
            <li>
                <a href="#">
                    <img src="{{ asset('public/merchemtAssets/images/sp_dashboard.png')}}" alt="Dashboard">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/product-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_products_&_services.png')}}" alt="Products">
                    Products & Services
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/loyalty-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_loyalty_points.png')}}" alt="Loyalty">
                    Loyalty Points
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/customer-jouney-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_customer_journey.png')}}" alt="Customer-journey">
                    Customer Journey
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/qr-code-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_my_qr_code.png')}}" alt="sp_my_qr_code">
                    My QR Code
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('public/merchemtAssets/images/sp_messages.png')}}" alt="sp_messages">
                    Messages
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/appointments-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_appointments.png')}}" alt="Appointments">
                    Appointments
                </a>
            </li>

            <li>
                <a href="{{ url('merchant/table-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_tables.png')}}" alt="Tables">
                    Tables
                </a>
            </li>

            <li>
                <a href="{{ url('merchant/room-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_rooms.png')}}" alt="Rooms">
                    Rooms
                </a>
            </li>

            <li>
                <a href="{{ url('merchant/menu-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_menu.png')}}" alt="Menu">
                    Menu
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/check-in-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_check_in.png')}}" alt="Check">
                    Check In
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/adverting-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_advertising.png')}}" alt="Advertising">
                    Advertising
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/invite-people-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_invite_people.png')}}" alt="sp_invite_people">
                    Invite People
                </a>
            </li>
            <li>
                <a href="{{ url('merchant/awards-management') }}">
                    <img src="{{ asset('public/merchemtAssets/images/sp_awards.png')}}" alt="Awards">
                    Awards
                </a>
            </li>
        </ul>
    </div>
    @yield('content')
    @yield('pagejs')
    @if(Route::current()->uri == 'merchant/appointments-management/calendar-event' || Route::current()->uri == 'appointments-management/{$id}/edit')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            var SITEURL = "{{ url('/merchant/appointments-management') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#full_calendar_events').fullCalendar({
                editable: true,
                editable: true,
                // events: SITEURL + "/calendar-event",
                displayEventTime: true,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function(appointment_start, appointment_end, allDay) {
                    // var event_name = prompt('Event Name:');
                    // if (event_name) {
                    var appointment_start = $.fullCalendar.formatDate(appointment_start, "Y-MM-DD HH:mm:ss");
                    var appointment_end = $.fullCalendar.formatDate(appointment_end, "Y-MM-DD HH:mm:ss");
                    $('#appointment_start').val(appointment_start);
                    $('#appointment_end').val(appointment_end);

                },


            });
        });

        function displayMessage(message) {
            toastr.success(message, 'Event');
        }
    </script>

    @else

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="{{ asset('public/merchemtAssets/js/libaury.js')}}"></script>
    <script src="{{ asset('public/merchemtAssets/js/bootstrap.min.js')}}"></script>
    <script>
        function sliceSize(dataNum, dataTotal) {
            return (dataNum / dataTotal) * 360;
        }

        function addSlice(sliceSize, pieElement, offset, sliceID, color) {
            $(pieElement).append("<div class='slice " + sliceID + "'><span></span></div>");
            var offset = offset - 1;
            var sizeRotation = -179 + sliceSize;
            $("." + sliceID).css({
                "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
            });
            $("." + sliceID + " span").css({
                "transform": "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
                "background-color": color
            });
        }

        function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
            var sliceID = "s" + dataCount + "-" + sliceCount;
            var maxSize = 179;
            if (sliceSize <= maxSize) {
                addSlice(sliceSize, pieElement, offset, sliceID, color);
            } else {
                addSlice(maxSize, pieElement, offset, sliceID, color);
                iterateSlices(sliceSize - maxSize, pieElement, offset + maxSize, dataCount, sliceCount + 1, color);
            }
        }

        function createPie(dataElement, pieElement) {
            var listData = [];
            $(dataElement + " span").each(function() {
                listData.push(Number($(this).html()));
            });
            var listTotal = 0;
            for (var i = 0; i < listData.length; i++) {
                listTotal += listData[i];
            }
            var offset = 0;
            var color = [
                "cornflowerblue",
                "olivedrab",
                "orange",
                "tomato",
                "crimson",
                "purple",
                "turquoise",
                "forestgreen",
                "navy",
                "gray"
            ];
            for (var i = 0; i < listData.length; i++) {
                var size = sliceSize(listData[i], listTotal);
                iterateSlices(size, pieElement, offset, i, 0, color[i]);
                $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
                offset += size;
            }
        }
        createPie(".pieID.legend", ".pieID.pie");
    </script>
    <script>
        var label = document.querySelector(".label");
        var c = document.getElementById("c");
        var ctx = c.getContext("2d");
        var cw = c.width = 490;
        var ch = c.height = 267;
        var cx = cw / 2,
            cy = ch / 2;
        var rad = Math.PI / 180;
        var frames = 0;

        ctx.lineWidth = 1;
        ctx.strokeStyle = "#06C6B3";
        ctx.fillStyle = "#888";
        ctx.font = "14px monospace";

        var grd = ctx.createLinearGradient(0, 0, 0, cy);
        grd.addColorStop(0, "hsla(167,72%,60%,1)");
        grd.addColorStop(1, "hsla(167,72%,60%,0)");

        var oData = {
            "2008": 10,
            "2009": 39.9,
            "2010": 17,
            "2011": 30.0,
            "2012": 5.3,
            "2013": 38.4,
            "2014": 15.7,
            "2015": 9.0
        };

        var valuesRy = [];
        var propsRy = [];
        for (var prop in oData) {

            valuesRy.push(oData[prop]);
            propsRy.push(prop);
        }


        var vData = 4;
        var hData = valuesRy.length;
        var offset = 50.5; //offset chart axis
        var chartHeight = ch - 2 * offset;
        var chartWidth = cw - 2 * offset;
        var t = 1 / 7; // curvature : 0 = no curvature 
        var speed = 2; // for the animation

        var A = {
            x: offset,
            y: offset
        }
        var B = {
            x: offset,
            y: offset + chartHeight
        }
        var C = {
            x: offset + chartWidth,
            y: offset + chartHeight
        }

        /*
            A  ^
                |  |  
                + 25
                |
                |
                |
                + 25  
            |__|_________________________________  C
            B
        */

        // CHART AXIS -------------------------
        ctx.beginPath();
        ctx.moveTo(A.x, A.y);
        ctx.lineTo(B.x, B.y);
        ctx.lineTo(C.x, C.y);
        ctx.stroke();

        // vertical ( A - B )
        var aStep = (chartHeight - 50) / (vData);

        var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
        var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
        var aStepValue = (Max - Min) / (vData);
        console.log("aStepValue: " + aStepValue); //8 units
        var verticalUnit = aStep / aStepValue;

        var a = [];
        ctx.textAlign = "right";
        ctx.textBaseline = "middle";
        for (var i = 0; i <= vData; i++) {

            if (i == 0) {
                a[i] = {
                    x: A.x,
                    y: A.y + 25,
                    val: Max
                }
            } else {
                a[i] = {}
                a[i].x = a[i - 1].x;
                a[i].y = a[i - 1].y + aStep;
                a[i].val = a[i - 1].val - aStepValue;
            }
            drawCoords(a[i], 3, 0);
        }

        //horizontal ( B - C )
        var b = [];
        ctx.textAlign = "center";
        ctx.textBaseline = "hanging";
        var bStep = chartWidth / (hData + 1);

        for (var i = 0; i < hData; i++) {
            if (i == 0) {
                b[i] = {
                    x: B.x + bStep,
                    y: B.y,
                    val: propsRy[0]
                };
            } else {
                b[i] = {}
                b[i].x = b[i - 1].x + bStep;
                b[i].y = b[i - 1].y;
                b[i].val = propsRy[i]
            }
            drawCoords(b[i], 0, 3)
        }

        function drawCoords(o, offX, offY) {
            ctx.beginPath();
            ctx.moveTo(o.x - offX, o.y - offY);
            ctx.lineTo(o.x + offX, o.y + offY);
            ctx.stroke();

            ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
        }
        //----------------------------------------------------------

        // DATA
        var oDots = [];
        var oFlat = [];
        var i = 0;

        for (var prop in oData) {
            oDots[i] = {}
            oFlat[i] = {}

            oDots[i].x = b[i].x;
            oFlat[i].x = b[i].x;

            oDots[i].y = b[i].y - oData[prop] * verticalUnit - 25;
            oFlat[i].y = b[i].y - 25;

            oDots[i].val = oData[b[i].val];

            i++
        }



        ///// Animation Chart ///////////////////////////
        //var speed = 3;
        function animateChart() {
            requestId = window.requestAnimationFrame(animateChart);
            frames += speed; //console.log(frames)
            ctx.clearRect(60, 0, cw, ch - 60);

            for (var i = 0; i < oFlat.length; i++) {
                if (oFlat[i].y > oDots[i].y) {
                    oFlat[i].y -= speed;
                }
            }
            drawCurve(oFlat);
            for (var i = 0; i < oFlat.length; i++) {
                ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
                ctx.beginPath();
                ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
                ctx.fill();
            }

            if (frames >= Max * verticalUnit) {
                window.cancelAnimationFrame(requestId);

            }
        }
        requestId = window.requestAnimationFrame(animateChart);

        /////// EVENTS //////////////////////
        c.addEventListener("mousemove", function(e) {
            label.innerHTML = "";
            label.style.display = "none";
            this.style.cursor = "default";

            var m = oMousePos(this, e);
            for (var i = 0; i < oDots.length; i++) {

                output(m, i);
            }

        }, false);

        function output(m, i) {
            ctx.beginPath();
            ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
            if (ctx.isPointInPath(m.x, m.y)) {
                //console.log(i);
                label.style.display = "block";
                label.style.top = (m.y + 10) + "px";
                label.style.left = (m.x + 10) + "px";
                label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
                c.style.cursor = "pointer";
            }
        }

        // CURVATURE
        function controlPoints(p) {
            // given the points array p calculate the control points
            var pc = [];
            for (var i = 1; i < p.length - 1; i++) {
                var dx = p[i - 1].x - p[i + 1].x; // difference x
                var dy = p[i - 1].y - p[i + 1].y; // difference y
                // the first control point
                var x1 = p[i].x - dx * t;
                var y1 = p[i].y - dy * t;
                var o1 = {
                    x: x1,
                    y: y1
                };

                // the second control point
                var x2 = p[i].x + dx * t;
                var y2 = p[i].y + dy * t;
                var o2 = {
                    x: x2,
                    y: y2
                };

                // building the control points array
                pc[i] = [];
                pc[i].push(o1);
                pc[i].push(o2);
            }
            return pc;
        }

        function drawCurve(p) {

            var pc = controlPoints(p); // the control points array

            ctx.beginPath();
            //ctx.moveTo(p[0].x, B.y- 25);
            ctx.lineTo(p[0].x, p[0].y);
            // the first & the last curve are quadratic Bezier
            // because I'm using push(), pc[i][1] comes before pc[i][0]
            ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

            if (p.length > 2) {
                // central curves are cubic Bezier
                for (var i = 1; i < p.length - 2; i++) {
                    ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
                }
                // the first & the last curve are quadratic Bezier
                var n = p.length - 1;
                ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
            }

            //ctx.lineTo(p[p.length-1].x, B.y- 25);
            ctx.stroke();
            ctx.save();
            ctx.fillStyle = grd;
            ctx.fill();
            ctx.restore();
        }

        function arrayMax(array) {
            return Math.max.apply(Math, array);
        };

        function arrayMin(array) {
            return Math.min.apply(Math, array);
        };

        function oMousePos(canvas, evt) {
            var ClientRect = canvas.getBoundingClientRect();
            return { //objeto
                x: Math.round(evt.clientX - ClientRect.left),
                y: Math.round(evt.clientY - ClientRect.top)
            }
        }
    </script>
    @endif
</body>

</html>