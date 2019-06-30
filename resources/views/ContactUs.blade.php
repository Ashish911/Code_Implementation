@extends('layouts.Pagelayout')

@section('content')

<style>



    .txt1 {
        font-family: Poppins-Regular;
        font-size: 18px;
        line-height: 1.2;
        color: #fff;
    }

    .txt2 {
        font-family: Poppins-Regular;
        font-size: 15px;
        line-height: 1.6;
        color: #999999;
    }

    .txt3 {
        font-family: Poppins-Regular;
        font-size: 15px;
        line-height: 1.6;
        color: #00ad5f;
    }

    .size1 {
        width: 355px;
        max-width: 100%;
    }

    .size2 {
        width: calc(100% - 43px);
    }


    .container-contact100 {
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background: #f2f2f2;

    }

    .wrap-contact100 {
        width: 1120px;
        background: #fff;
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        flex-direction: row-reverse;

    }

    /*==================================================================
    [ Contact more ]*/
    .contact100-more {
        width: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        z-index: 1;
        padding: 30px 15px 0px 15px;
    }

    .contact100-more::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0,0,0,0.8);
    }



    /*==================================================================
    [ Form ]*/

    .contact100-form {
        width: 50%;
        display: flex;
        flex-wrap: wrap;
        padding: 56px 55px 63px 55px;
    }

    .contact100-form-title {
        width: 100%;
        display: block;
        font-family: Poppins-Regular;
        font-size: 30px;
        color: #333333;
        line-height: 1.2;
        text-align: center;
        padding-bottom: 33px;
    }



    /*------------------------------------------------------------------
    [ Input ]*/

    .wrap-input100 {
        width: 100%;
        position: relative;
        border: 1px solid #e6e6e6;
    }

    .rs1-wrap-input100,
    .rs2-wrap-input100 {
        width: 50%;
    }

    .rs2-wrap-input100 {
        border-left: none;
    }

    .label-input100 {
        font-family: Poppins-Regular;
        font-size: 12px;
        color: #555555;
        line-height: 1.5;
        text-transform: uppercase;
        letter-spacing: 1px;

        display: flex;
        align-items: center;
        width: 100%;
        min-height: 55px;
        border: 1px solid #e6e6e6;
        border-bottom: none;
        padding: 10px 25px;
        margin-top: 15px;
        margin-bottom: 0;
    }

    .input100 {
        display: block;
        width: 100%;
        background: transparent;
        font-family: Poppins-Regular;
        font-size: 18px;
        color: #666666;
        line-height: 1.2;
        padding: 0 25px;
    }

    input.input100 {
        height: 55px;
    }


    textarea.input100 {
        min-height: 139px;
        padding-top: 19px;
        padding-bottom: 15px;
    }

    /*---------------------------------------------*/

    .focus-input100 {
        position: absolute;
        display: block;
        width: calc(100% + 2px);
        height: calc(100% + 2px);
        top: -1px;
        left: -1px;
        pointer-events: none;
        border: 1px solid #00ad5f;

        visibility: hidden;
        opacity: 0;

        transition: all 0.4s;

        transform: scaleX(1.1) scaleY(1.3);
    }

    .input100:focus + .focus-input100 {
        visibility: visible;
        opacity: 1;

        transform: scale(1);
    }



    /*------------------------------------------------------------------
    [ Button ]*/
    .container-contact100-form-btn {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 23px;
    }

    .contact100-form-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        min-width: 200px;
        height: 50px;
        border-radius: 5px;
        background: #00ad5f;

        font-family: Montserrat-Bold;
        font-size: 12px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;
        letter-spacing: 1px;

        transition: all 0.4s;
    }

    .contact100-form-btn:hover {
        background: #18181E;
        color: #DEC79B;
    }

    .p-b-47{
        padding-bottom: 47px;
    }

    .p-r-25{
        padding-right: 25px;
    }

    .mt{
        margin-top: 40%;
    }

</style>

<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" action="{{route('ContactUsSave.store')}}">
            @csrf
				<span class="contact100-form-title">
					Send Us A Message
				</span>

            <label class="label-input100" for="first-name">Tell us your name</label>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                <input id="first-name" class="input100" type="text" name="FirstName" placeholder="First name">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                <input class="input100" type="text" name="LastName" placeholder="Last name">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="email">Enter your email </label>
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input id="email" class="input100" type="text" name="email" placeholder="">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="phone">Enter phone number</label>
            <div class="wrap-input100">
                <input id="phone" class="input100" type="text" name="phone" placeholder="">
                <span class="focus-input100"></span>
            </div>

            <label class="label-input100" for="message">Message </label>
            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <input class="contact100-form-btn" type="submit" placeholder="Send Message">
            </div>
        </form>

        <div class="contact100-more " style="background-image: url('assets/images/bg-01.jpg');">
            <div class=" size1 p-b-47 offset-2 mt ">
                <div class="txt1 p-r-25">
                    <span class="fa fa-home"><a class="ml-2 ">Address</a></span>
                </div>
                <div class="size2" >
                    <span class="txt2">
							North London, NY 10018 UK
						</span>
                </div>
            </div>

            <div class="size1 p-b-47 offset-2">
                <div class="txt1 p-r-25">
                    <span class="fa fa-phone"><a class="ml-2">Phone </a></span>
                </div>
                <div class="size2">
                    <span class="txt3">
							+977 48646545
						</span>
                </div>
            </div>

            <div class="size1 p-b-47 offset-2">
                <div class="txt1 p-r-25">
                    <span class="fa fa-envelope"><a class="ml-2">E-Mail</a></span>
                </div>
                <div class="size2">
                    <span class="txt3">
							RoyalTattooService@google.com
						</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection