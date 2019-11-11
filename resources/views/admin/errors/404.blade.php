@include('frontend.partials.header')
<style>
    .Page-not-found {
        height: 45px;
        font-family: Poppins;
        font-size: 32px;
        font-weight: 600;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #fbfcff;
        margin-left: 12px;
    }

    .four-zero-four {
        height: 62px;
        font-family: Poppins;
        font-size: 98px;
        font-weight: 600;
        font-style: normal;
        font-stretch: normal;
        line-height: 0.63;
        letter-spacing: normal;
        text-align: center;
        color: #fbfcff;
        margin-top: 100px;
    }

    .sorry-but-we-cant {
        height: 23px;
        font-family: Poppins;
        font-size: 16px;
        font-weight: normal;
        font-style: normal;
        font-stretch: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #fbfcff;
        margin-top: 100px;
        margin-left: -2px;
    }
</style>
<div class="register-page">





    @include('frontend.partials.navigation')



    <table style="max-width: 100%;margin: 0 auto;" cellpadding="0" cellspacing="0">

        <tbody style="background-color: #3D52D5;">

            <tr>

                <td style="padding: 20px 0 40px;text-align: center;">

                    <div class="container" style="max-width: 100%;margin:0 auto;">
                        <p class="Page-not-found">

                            Page not found.

                        </p>
                        <p class="four-zero-four">

                            404

                        </p>
                        <p class="sorry-but-we-cant">

                            Sorry, but we can’t find this page. It might be an old link or maybe it moved.

                        </p>


                    </div>

                </td>

            </tr>

            <tr>

                <td>


                </td>

            </tr>

            <tr>

                <td>

                    <div class="container" style="max-width: 100%;margin:0 50px;">


                        <!-- <p style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;">

                            Please verify your email by following this link below:</p> -->


                    </div>

                </td>

            </tr>

            <tr>

                <td>



                </td>

            </tr>



        </tbody>


    </table>


</div>

</div>



@include('frontend.partials.navigation-footer')







</div>

@include('frontend.partials.footer')