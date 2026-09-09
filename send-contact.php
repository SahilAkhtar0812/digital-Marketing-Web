<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;


/* =====================================================
   COMPOSER
===================================================== */

require __DIR__ . '/vendor/autoload.php';


/* =====================================================
   LOAD .ENV
===================================================== */

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();


/* =====================================================
   CHECK ENV SETTINGS
===================================================== */

$requiredEnv = [
    'MAIL_HOST',
    'MAIL_PORT',
    'MAIL_USERNAME',
    'MAIL_PASSWORD',
    'MAIL_FROM_ADDRESS',
    'MAIL_FROM_NAME',
    'CONTACT_EMAIL'
];

foreach ($requiredEnv as $key) {

    if (empty($_ENV[$key])) {

        error_log("Missing .env value: {$key}");

        header(
            'Location: /website/contact.php?status=error'
        );

        exit;
    }
}


/* =====================================================
   POST REQUEST ONLY
===================================================== */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    header(
        'Location: /website/contact.php'
    );

    exit;
}


/* =====================================================
   HONEYPOT BOT PROTECTION
===================================================== */

if (!empty($_POST['website'] ?? '')) {

    header(
        'Location: /website/contact.php?status=success'
    );

    exit;
}


/* =====================================================
   GET FORM DATA
===================================================== */

$name = trim($_POST['name'] ?? '');

$email = trim($_POST['email'] ?? '');

$phone = trim($_POST['phone'] ?? '');

$company = trim($_POST['company'] ?? '');

$service = trim($_POST['service'] ?? '');

$budget = trim($_POST['budget'] ?? '');

$message = trim($_POST['message'] ?? '');


/* =====================================================
   REQUIRED VALIDATION
===================================================== */

if (
    $name === '' ||
    $email === '' ||
    $phone === '' ||
    $service === '' ||
    $message === ''
) {

    header(
        'Location: /website/contact.php?status=error'
    );

    exit;
}


/* =====================================================
   EMAIL VALIDATION
===================================================== */

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    header(
        'Location: /website/contact.php?status=error'
    );

    exit;
}


/* =====================================================
   LENGTH VALIDATION
===================================================== */

if (
    strlen($name) > 100 ||
    strlen($email) > 150 ||
    strlen($phone) > 20 ||
    strlen($company) > 150 ||
    strlen($service) > 100 ||
    strlen($budget) > 100 ||
    strlen($message) > 2000
) {

    header(
        'Location: /website/contact.php?status=error'
    );

    exit;
}


/* =====================================================
   CUSTOMER WHATSAPP NUMBER
===================================================== */

$phoneDigits =
    preg_replace('/\D/', '', $phone);


if (strlen($phoneDigits) === 10) {

    $customerWhatsApp =
        '91' . $phoneDigits;

} elseif (
    strlen($phoneDigits) === 12 &&
    str_starts_with($phoneDigits, '91')
) {

    $customerWhatsApp =
        $phoneDigits;

} else {

    $customerWhatsApp =
        $phoneDigits;
}


/* =====================================================
   ESCAPE DATA
===================================================== */

$safeName = htmlspecialchars(
    $name,
    ENT_QUOTES,
    'UTF-8'
);

$safeEmail = htmlspecialchars(
    $email,
    ENT_QUOTES,
    'UTF-8'
);

$safePhone = htmlspecialchars(
    $phone,
    ENT_QUOTES,
    'UTF-8'
);

$safeCompany = htmlspecialchars(
    $company ?: 'Not provided',
    ENT_QUOTES,
    'UTF-8'
);

$safeService = htmlspecialchars(
    $service,
    ENT_QUOTES,
    'UTF-8'
);

$safeBudget = htmlspecialchars(
    $budget ?: 'Not provided',
    ENT_QUOTES,
    'UTF-8'
);

$safeMessage = nl2br(
    htmlspecialchars(
        $message,
        ENT_QUOTES,
        'UTF-8'
    )
);


/* =====================================================
   PHPMAILER
===================================================== */

$mail = new PHPMailer(true);


try {


    /* =================================================
       SMTP
    ================================================= */

    $mail->isSMTP();

    $mail->Host =
        $_ENV['MAIL_HOST'];

    $mail->SMTPAuth =
        true;

    $mail->Username =
        $_ENV['MAIL_USERNAME'];

    $mail->Password =
        $_ENV['MAIL_PASSWORD'];

    $mail->SMTPSecure =
        PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port =
        (int) $_ENV['MAIL_PORT'];


    /* =================================================
       FROM
    ================================================= */

    $mail->setFrom(
        $_ENV['MAIL_FROM_ADDRESS'],
        $_ENV['MAIL_FROM_NAME']
    );


    /* =================================================
       RECEIVE ENQUIRY
    ================================================= */

    $mail->addAddress(
        $_ENV['CONTACT_EMAIL'],
        'SD Media Tech'
    );


    /* =================================================
       REPLY TO CUSTOMER
    ================================================= */

    $mail->addReplyTo(
        $email,
        $name
    );


    /* =================================================
       EMAIL SETTINGS
    ================================================= */

    $mail->isHTML(true);

    $mail->CharSet =
        'UTF-8';

    $mail->Subject =
        'New Website Enquiry - ' . $service;


    /* =================================================
       HTML EMAIL
    ================================================= */

    $mail->Body = '

    <div style="
        margin:0;
        padding:30px;
        background:#f4f6f8;
        font-family:Arial,sans-serif;
    ">

        <div style="
            max-width:680px;
            margin:auto;
            background:#ffffff;
            border-radius:14px;
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,0.06);
        ">


            <!-- HEADER -->

            <div style="
                background:#111827;
                color:#ffffff;
                padding:28px;
            ">

                <div style="
                    color:#8b5cf6;
                    font-size:12px;
                    letter-spacing:1.5px;
                    font-weight:bold;
                    margin-bottom:8px;
                ">
                    SD MEDIA TECH
                </div>


                <h2 style="
                    margin:0;
                    font-size:24px;
                ">
                    New Website Enquiry
                </h2>


                <p style="
                    margin:7px 0 0;
                    color:#cbd5e1;
                    font-size:13px;
                ">
                    A potential customer submitted your website form.
                </p>

            </div>


            <!-- DETAILS -->

            <div style="padding:28px;">


                <table
                    cellpadding="10"
                    cellspacing="0"
                    style="
                        width:100%;
                        border-collapse:collapse;
                    "
                >


                    <tr>

                        <td style="
                            width:140px;
                            color:#64748b;
                        ">
                            Name
                        </td>

                        <td>
                            <strong>
                                ' . $safeName . '
                            </strong>
                        </td>

                    </tr>


                    <tr>

                        <td style="color:#64748b;">
                            Email
                        </td>

                        <td>
                            ' . $safeEmail . '
                        </td>

                    </tr>


                    <tr>

                        <td style="color:#64748b;">
                            Phone
                        </td>

                        <td>
                            ' . $safePhone . '
                        </td>

                    </tr>


                    <tr>

                        <td style="color:#64748b;">
                            Company
                        </td>

                        <td>
                            ' . $safeCompany . '
                        </td>

                    </tr>


                    <tr>

                        <td style="color:#64748b;">
                            Service
                        </td>

                        <td>
                            <strong>
                                ' . $safeService . '
                            </strong>
                        </td>

                    </tr>


                    <tr>

                        <td style="color:#64748b;">
                            Budget
                        </td>

                        <td>
                            ' . $safeBudget . '
                        </td>

                    </tr>

                </table>


                <!-- MESSAGE -->

                <div style="
                    margin-top:22px;
                    padding:20px;
                    background:#f8fafc;
                    border-radius:10px;
                ">

                    <strong>
                        Project Details
                    </strong>


                    <div style="
                        margin-top:10px;
                        line-height:1.7;
                        color:#475569;
                    ">

                        ' . $safeMessage . '

                    </div>

                </div>


                <!-- ACTION BUTTONS -->

                <div style="
                    margin-top:25px;
                ">


                    <a
                        href="mailto:' . $safeEmail . '"
                        style="
                            display:inline-block;
                            background:#111827;
                            color:#ffffff;
                            padding:12px 18px;
                            text-decoration:none;
                            border-radius:7px;
                            font-weight:bold;
                            margin-right:8px;
                        "
                    >
                        Reply by Email
                    </a>


                    <a
                        href="https://wa.me/' . $customerWhatsApp . '"
                        style="
                            display:inline-block;
                            background:#25D366;
                            color:#ffffff;
                            padding:12px 18px;
                            text-decoration:none;
                            border-radius:7px;
                            font-weight:bold;
                        "
                    >
                        Contact on WhatsApp
                    </a>


                </div>

            </div>


            <!-- FOOTER -->

            <div style="
                padding:18px 28px;
                background:#f8fafc;
                color:#94a3b8;
                font-size:11px;
            ">

                Submitted through the SD Media Tech website.

            </div>

        </div>

    </div>

    ';


    /* =================================================
       TEXT FALLBACK
    ================================================= */

    $mail->AltBody =

        "NEW WEBSITE ENQUIRY\n\n" .

        "Name: {$name}\n" .

        "Email: {$email}\n" .

        "Phone: {$phone}\n" .

        "Company: " .
        ($company ?: 'Not provided') .
        "\n" .

        "Service: {$service}\n" .

        "Budget: " .
        ($budget ?: 'Not provided') .
        "\n\n" .

        "Project Details:\n" .

        $message;


    /* =================================================
       SEND
    ================================================= */

    $mail->send();


    /* =================================================
       SUCCESS
    ================================================= */

    header(
        'Location: /website/contact.php?status=success'
    );

    exit;


} catch (Exception $e) {


    /* =================================================
       LOG REAL ERROR
    ================================================= */

    error_log(
        'SD Media Tech PHPMailer Error: ' .
        $mail->ErrorInfo
    );


    /* =================================================
       REDIRECT
    ================================================= */

    header(
        'Location: /website/contact.php?status=error'
    );

    exit;
}