@extends('merchent.master')
@section('pageTitle', 'Appointments')
@section('content')
@section('pageCss')
<style>
</style>
@stop

<div class="appoint-ment">
    <div class="appoint-sec">
        <div class="col-md-6 text-left">
            <p>Add Availability </p>
        </div>

    </div>


    <div class="new-requests">
        <div class="row">
            <div class="col-md-5 text-left">
                <div class="Jessica-pra calendar-box">
                    <div class="calendar">
                        <div class="header">
                            <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                            <div class="text" data-render="month-year"></div>
                            <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
                        </div>
                        <div class="months" data-flow="left">
                            <div class="month month-a">
                                <div class="render render-a"></div>
                            </div>
                            <div class="month month-b">
                                <div class="render render-b"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 text-left">
                <div class="appointment-for title">
                    <form>
                        <div class="form-group">
                            <label>Appointment Title</label>
                            <input type="name" class="form-control" placeholder="Write title here">
                        </div>
                        <div class="form-group">
                            <label>From</label>
                            <input type="time" class="form-control " placeholder="HH:MM">
                        </div>
                        <div class="form-group">
                            <label>To</label>
                            <input type="time" class="form-control " placeholder="HH:MM">
                        </div>
                        <div class="form-group">
                            <label class="recurring">Recurring Appointment</label>
                            <span class="pull-right">
                                <label class="switch right-click">
                                    <input type="checkbox ">
                                    <span class="slider round"></span>
                                </label>
                            </span>
                        </div>
                    </form>
                    <div class="Jessica-pra appointment">
                        <div class="pro-service Message">
                            <a href="#">Connect with Product/Service <img src="{{ asset('public/merchemtAssets/images/arrow_view.png')}}" alt="arrow_view"> </a>
                        </div>
                        <span class="mobile-box">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/mobile-reparing.jpeg')}}" alt="">
                            </figure>
                            <p>Mobile Repairing</p>
                        </span>
                        <span class="mobile-box">
                            <figure>
                                <img src="{{ asset('public/merchemtAssets/images/laptop-repairing.jpeg')}}" alt="">
                            </figure>
                            <p>Laptop Repairing</p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Cancel</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary bgcolor">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('pagejs')
<script>
    var Calendar = function(t) {
        this.divId = t.RenderID ? t.RenderID : '[data-render="calendar"]', this.DaysOfWeek = t.DaysOfWeek ? t.DaysOfWeek : ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], this.Months = t.Months ? t.Months : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var e = new Date;
        this.CurrentMonth = e.getMonth(), this.CurrentYear = e.getFullYear();
        var r = t.Format;
        this.f = "string" == typeof r ? r.charAt(0).toUpperCase() : "M"
    };
    Calendar.prototype.nextMonth = function() {
        11 == this.CurrentMonth ? (this.CurrentMonth = 0, this.CurrentYear = this.CurrentYear + 1) : this.CurrentMonth = this.CurrentMonth + 1, this.divId = '[data-active="false"] .render', this.showCurrent()
    }, Calendar.prototype.prevMonth = function() {
        0 == this.CurrentMonth ? (this.CurrentMonth = 11, this.CurrentYear = this.CurrentYear - 1) : this.CurrentMonth = this.CurrentMonth - 1, this.divId = '[data-active="false"] .render', this.showCurrent()
    }, Calendar.prototype.previousYear = function() {
        this.CurrentYear = this.CurrentYear - 1, this.showCurrent()
    }, Calendar.prototype.nextYear = function() {
        this.CurrentYear = this.CurrentYear + 1, this.showCurrent()
    }, Calendar.prototype.showCurrent = function() {
        this.Calendar(this.CurrentYear, this.CurrentMonth)
    }, Calendar.prototype.checkActive = function() {
        1 == document.querySelector(".months").getAttribute("class").includes("active") ? document.querySelector(".months").setAttribute("class", "months") : document.querySelector(".months").setAttribute("class", "months active"), "true" == document.querySelector(".month-a").getAttribute("data-active") ? (document.querySelector(".month-a").setAttribute("data-active", !1), document.querySelector(".month-b").setAttribute("data-active", !0)) : (document.querySelector(".month-a").setAttribute("data-active", !0), document.querySelector(".month-b").setAttribute("data-active", !1)), setTimeout(function() {
            document.querySelector(".calendar .header").setAttribute("class", "header active")
        }, 200), document.querySelector("body").setAttribute("data-theme", this.Months[document.querySelector('[data-active="true"] .render').getAttribute("data-month")].toLowerCase())
    }, Calendar.prototype.Calendar = function(t, e) {
        "number" == typeof t && (this.CurrentYear = t), "number" == typeof t && (this.CurrentMonth = e);
        var r = (new Date).getDate(),
            n = (new Date).getMonth(),
            a = (new Date).getFullYear(),
            o = new Date(t, e, 1).getDay(),
            i = new Date(t, e + 1, 0).getDate(),
            u = 0 == e ? new Date(t - 1, 11, 0).getDate() : new Date(t, e, 0).getDate(),
            s = "<span>" + this.Months[e] + " &nbsp; " + t + "</span>",
            d = '<div class="table">';
        d += '<div class="row head">';
        for (var c = 0; c < 7; c++) d += '<div class="cell">' + this.DaysOfWeek[c] + "</div>";
        d += "</div>";
        for (var h, l = dm = "M" == this.f ? 1 : 0 == o ? -5 : 2, v = (c = 0, 0); v < 6; v++) {
            d += '<div class="row">';
            for (var m = 0; m < 7; m++) {
                if ((h = c + dm - o) < 1) d += '<div class="cell disable">' + (u - o + l++) + "</div>";
                else if (h > i) d += '<div class="cell disable">' + l++ + "</div>";
                else {
                    d += '<div class="cell' + (r == h && this.CurrentMonth == n && this.CurrentYear == a ? " active" : "") + '"><span>' + h + "</span></div>", l = 1
                }
                c % 7 == 6 && h >= i && (v = 10), c++
            }
            d += "</div>"
        }
        d += "</div>", document.querySelector('[data-render="month-year"]').innerHTML = s, document.querySelector(this.divId).innerHTML = d, document.querySelector(this.divId).setAttribute("data-date", this.Months[e] + " - " + t), document.querySelector(this.divId).setAttribute("data-month", e)
    }, window.onload = function() {
        var t = new Calendar({
            RenderID: ".render-a",
            Format: "M"
        });
        t.showCurrent(), t.checkActive();
        var e = document.querySelectorAll(".header [data-action]");
        for (i = 0; i < e.length; i++) e[i].onclick = function() {
            if (document.querySelector(".calendar .header").setAttribute("class", "header"), "true" == document.querySelector(".months").getAttribute("data-loading")) return document.querySelector(".calendar .header").setAttribute("class", "header active"), !1;
            var e;
            document.querySelector(".months").setAttribute("data-loading", "true"), this.getAttribute("data-action").includes("prev") ? (t.prevMonth(), e = "left") : (t.nextMonth(), e = "right"), t.checkActive(), document.querySelector(".months").setAttribute("data-flow", e), document.querySelector('.month[data-active="true"]').addEventListener("webkitTransitionEnd", function() {
                document.querySelector(".months").removeAttribute("data-loading")
            }), document.querySelector('.month[data-active="true"]').addEventListener("transitionend", function() {
                document.querySelector(".months").removeAttribute("data-loading")
            })
        }
    };
</script>
@stop