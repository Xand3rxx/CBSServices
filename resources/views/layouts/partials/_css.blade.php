<style>
/* section_heading */
.section_tit {
	position: relative;
	padding-bottom: 25px;
	display: inline-block;
}
.section_tit:before {
	content: "";
	position: absolute;
	bottom: 0px;
	left: 0px;
	width: 35%;
	height: 2px;
	background: #000;
}
.section_tit:after {
	content: "";
	position: absolute;
	bottom: 0px;
	right: 0px;
	width: 35%;
	height: 2px;
	background: #000;
}
.section_tit h2 {
	margin: 0px;
}
.three_line {
	width: 40px;
	height: 2px;
	background: #000;
	position: absolute;
	bottom: 0px;
	left: 50%;
	transform: translateX(-50%);
}
.three_line:before {
	content: "";
	position: absolute;
	height: 2px;
	width: 80px;
	bottom: -7px;
	left: 50%;
	transform: translateX(-50%);
	background: #000;
}
.three_line:after {
	content: "";
	position: absolute;
	height: 2px;
	width: 80px;
	bottom: 7px;
	left: 50%;
	transform: translateX(-50%);
	background: #000;
}
@media (max-width: 767px) {
	.three_line {
    width: 30px;
   }
   .three_line:before, .three_line:after{
   	width: 60px;
   }
}
    .courses_popular{
        background: #fff;
    }
    .mt-1, .my-1 {
        margin-top: .25rem!important;
    }
    .mt-2, .my-2 {
        margin-top: .5rem!important;
    }
    .mb-1 {
        margin-top: .25rem!important;
    }
    .mb-2 {
        margin-bottom: .5rem!important;
    }
    .top_cours {
        position: relative;
        overflow: hidden;
    }
    .top_cours img {
        width: 100%;
    }
    .courses_detail {
        overflow: hidden;
        padding: 20px 30px;
    }
    .courses_detail h3 {
        margin: 0px 0px 15px 0px;
    }
    .apply_box {
        position: absolute;
        bottom: 100%;
        left: 0px;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.44);
        transition: all 0.3s;
    }
    .courses_popular:hover .apply_box {
        bottom: 0px;
    }
    .full_width {
        width: 100%;
        text-align: center;
    }
    .courses_detail {
        overflow: hidden;
        padding: 20px 30px;
    }
    .courses_detail h3 {
        margin: 0px 0px 15px 0px;
    }
    .start_view {
        display: inline-block;
        float: left;
        color: #fec722;
        font-size: 20px;
    }
    .revieew_box {
        float: right;
        display: inline-block;
    }
    .form_home {
        padding: 30px 15px;
    }
    .form_home .form-field textarea {
        resize: none;
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .form_home {
            padding: 60px 40px;
        }
    }
    /* date */
    .form_sec_box .heading-box {
        padding-right: 80px;
    }
    .section_heading h2 {
        color: #fff;
        margin: 0px;
    }
</style>
