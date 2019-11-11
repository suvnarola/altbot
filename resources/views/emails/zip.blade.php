{{-- <!DOCTYPE html>

<html>

<head>

    <title>Welcome Email</title>

</head>



<body>

<h2>Welcome to Al BOt</h2>

<br/>

Please click on the below link to verify your email account

<br/>

<a href="{{url('user/verify', $email_token)}}">Verify Email</a>

</body>



</html> --}}

<!doctype html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <title>al.t.bot</title>

  <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">

  <meta name="apple-mobile-web-app-capable" content="yes">

  <meta name="format-detection" content="telephone=no">

  <meta name="apple-touch-fullscreen" content="yes">

  <meta name="author" content="">

  <meta name="theme-color" content="#ffcc48">

</head>



<body style="margin:0;">



  <table style="max-width: 600px;margin: 0 auto;" cellpadding="0" cellspacing="0">

    <tbody style="background-color: #3D52D5;">

      <tr>

        <td style="padding: 20px 0 40px;text-align: center;">

          <div class="container" style="max-width: 100%;margin:0 auto;">

            <a href="#">

              <img src="{{asset('assets/frontend/image/header-logo.png')}}" style="width:100px;max-width:100%;"
                alt="header-logo">

            </a>

          </div>

        </td>

      </tr>

      <tr>

        <td>

          <div class="container" style="max-width: 100%;margin:0 50px;">

            <h2
              style="color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 40px;line-height: 62px;text-align: center;font-weight:700;margin-top:0;margin-bottom:10px;">

              Here is your Al.t.bot</h2>

          </div>

        </td>

      </tr>

      <tr>

        <td>

          <div class="container" style="max-width: 100%;margin:0 50px;">

            <p style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;">

              You have successfully purchased advanced trading bot “al.t.bot”.
              In this email, you will find all the details you need to get up and running with this bot.
            </p>
            <h2
              style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;    margin-bottom: 0;">
              How to install your al.t.bot.</h2>
            <p style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;    margin-top: 0;
            ">


              Follow this link to find out step by step guide how to install this bot.
              - <a style="color:white" href="{{ url('instructions') }}">http://altbot.net/instructions</a>
            </p>

            <h2
              style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;    margin-bottom: 0;">
              Download al.t.bot.</h2>
            <p
              style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;    margin-top: 0;">

              Click here to download your Al.t.bot - <a href="{{$download_link}}"
                style="color: #FBFCFF;font-size: 17px;text-decoration: underline;font-family: 'Poppins', sans-serif;">
                Download Al.t.bot</a>

            </p>
            <p style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;">
              We value our customers highly and you can always reach us if you run into any problems with
              your Al.t.bot:
            </p>
            <p style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;">

              <span style="font-family: 'Poppins', sans-serif;font-weight:600;font-size:20px;"> Email: </span>
              info@altbot.net


            </p>
            <p style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 0px;">


              <span style="font-family: 'Poppins', sans-serif;font-weight:600;font-size:20px;"> Mob: </span> +371
              26286137


            </p>
            <p style="color: #FBFCFF; font-family: 'Poppins', sans-serif; font-size: 18px;  line-height: 24px;">


              <span style="font-family: 'Poppins', sans-serif;font-weight:600;font-size:20px;"> Chat: </span>
              Telegram/altbot

            </p>

          </div>

        </td>

      </tr>

      <tr>


      </tr>

      <tr>

        <td>

          <div class="container" style="max-width: 100%;margin:0 50px;">

            <ul style="list-style:none;padding:0;">

              <li>

                <p style="color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 18px;line-height: 22px;">

                  Best regards,</p>

              </li>

              <li>

                <p style="color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 18px;line-height: 22px;">

                  Al.t.bot team.</p>

              </li>

            </ul>

          </div>

        </td>

      </tr>

    </tbody>

    <tfoot style="background-color:#3A405A;">

      <tr>

        <td style="padding:60px 0 20px;">

          <div class="container" style="max-width: 100%;margin:0 50px;">

            <div style="display:flex;justify-content:space-between;">

              <div>

                <a href="#">

                  <img src="{{asset('assets/frontend/image/footer-logo.png')}}" alt=""
                    style="max-width:100%;width:130px;">

                </a>

              </div>

              <div style="display:flex;align-items:center;">

                <span
                  style="opacity: 0.5;color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 16px;line-height: 20px;">Join

                  the talk:</span>

                <a href="#">

                  <img src="{{asset('assets/frontend/image/telegram.png')}}" alt="telegram-logo" title=""
                    class="telegram-logo" style="width: 34px;max-width: 100%;margin-left: 24px;">

                </a>

              </div>

            </div>

          </div>

        </td>

      </tr>

      <tr>

        <td>

          <div class="container" style="max-width: 100%;margin:0 50px;">

            <ul style="list-style:none;padding:0;display: flex;justify-content: space-around;">

              <li style="color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 16px;line-height: 20px;">

                Live blog</li>

              <li style="color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 16px;line-height: 20px;">

                How to start</li>

              <li style="color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 16px;line-height: 20px;">

                Legal & Privacy</li>

              <li style="color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 16px;line-height: 20px;">

                Contacts</li>

            </ul>

          </div>

        </td>

      </tr>

      <tr>

        <td>

          <p
            style="color: #FBFCFF;font-family: 'Poppins', sans-serif;font-size: 13px;line-height: 18px;text-align:center;font-weight:400;">

            Altbot trading solutions inc. © All rights reserved</p>

        </td>

      </tr>

    </tfoot>

  </table>











  <script>
    </body>

</html>