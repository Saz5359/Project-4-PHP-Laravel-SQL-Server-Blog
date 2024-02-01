<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="legal.css">
    <title>{{pageName($subsection)}}</title>
</head>

<body>
    <!--This is the legal page -->
    <?php
    //This function checks which url has been selected and based on the url it returns the title
    function pageName($ss)
    {
        if ($ss === 'tos')
            return 'Terms of Service';
        else
            return 'Privacy Policy';
    }
    ?>

    <h1 class="heading">Legal: {{pageName($subsection)}}</h1>
    @if($subsection==='tos')
    <p>Effective Date: February 9, 2023

        Welcome to the network of interactive and premium content services provided by CBS Interactive Inc., its affiliates or its subsidiaries (collectively “CBS Interactive,” “us,” or “we”). These Terms of Use (“Terms”), including the “Dispute Resolution; Arbitration Agreement” provisions in Section 1 below, govern your use of our websites, applications, and other products or services that include an authorized link to these Terms (collectively, the “Services”).

        Please review these Terms carefully before using the Services because they affect your rights. By using any of the Services, you accept these Terms and agree to be legally bound by them.

        Please consult our Privacy Policy for information regarding our privacy practices.

        Certain Services are provided to you free of charge, while other Services, including Paramount+, require payment before you can access them. If you choose to subscribe to a fee-based Service, please also review such Service’s subscription terms (see Section 7 below). For example, if you subscribe to Paramount+, please review the Paramount+ Subscription Terms (http://www.pplus.legal/subscription), in addition to the other provisions of these Terms. Note that these Terms shall not apply to the use of Paramount+ by subscribers who signed up for Paramount+ in the EU and Switzerland.

        These Terms are effective as of the Effective Date above or, if required by law, 30 days after notice to you. If you have not reviewed the Terms of Use applicable to a Service since the Effective Date, please review these updated Terms carefully before using any Service. If you do not agree with these Terms, your sole remedy is to not use our Services, and you may receive a pro-rated refund for any of your pre-paid fees for our Services you do not use by contacting us at pplustourefund-grp@cbsinteractive.com (for Paramount+), cbssportstourefund-grp@cbsinteractive.com (for CBS Sports, SportsLine, or SportsLive) or 247sportstourefund-grp@cbsinteractive.com (247Sports) within 30 days of the Effective Date.

        We may change these Terms in the future, so we encourage you to review periodically the Terms of Use applicable to each Service you use. The most current version of the applicable Terms of Use (along with its effective date) will be posted on each of the Services. Changes to these Terms will be effective immediately or, if required by law, 30 days after notice to you, which may be given by posting the updated Terms on our Services or by email. If you continue to use the Services after we change these Terms, you accept all changes.</p>
    <!-- etc -->
    @else
    <p>Last Modified: June 27th, 2023

        Paramount is a leading global media and entertainment company that delivers premium content and experiences to audiences worldwide across studios, networks, streaming services, live events, merchandise and more.

        We know how important it is to protect your personal information. This privacy policy explains our practices — and your choices — on how we collect, use, and share your information when you interact with any of our services. These services include our streaming services, mobile and online applications or other products or services of our brands, websites, live events, content or advertisements, and customer service tools. Depending on the Paramount offering or how you interact with us, there may be additional notices about our practices and your choices.

    </p>
    <!-- etc -->
    @endif

    <x-cookie />
    <section class="footer">
        <x-footer />
    </section>
</body>

</html>