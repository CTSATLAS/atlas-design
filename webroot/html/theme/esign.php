<?php
$img_path = '';
if(!file_exists('/img/admin_header_logo.gif'))
    $img_path = APP ;
ob_start() ?>
<?php ob_start() ?>
<body>
<div class="header">
    <div class="left">
        <img src="<?= APP ?>webroot/img/admin/admin_header_logo.jpg" class="logo" />
    </div>


    <div class="right">
        <ul class="list">
            <li></li>
        </ul>
    </div>
</div>

<br clear="all" />

<h3>
    <?= $company_name ?> Acknowledgement of Electronic Signature
</h3>
<h4>RELEASE OF INFORMATION</h4>
<p>I hereby authorize all partners in the Citrus Levy Marion Regional Workforce Development Board’s, dba CareerSource Citrus Levy Marion, system to engage in verbal, written, facsimile, or computerized communication of information for the purpose of making me eligible for services or for identifying services or agencies to assist me. All pertinent records and information can be released including those regarding past, present, or future information or records that may be needed for eligibility determination, monitoring or follow-up purposes. It is my understanding that any information obtained by any partner in the CareerSource Citrus Levy Marion’s system will be held in strict confidence. I am aware that any information will be used in my best interest to provide ease of access to services; that providing the information is voluntary; that the information will be kept confidential and used only in accordance with law; and that refusal to provide the information will not subject me to any adverse treatment.</p>
<h4>ATTESTATION</h4>
<p>I hereby certify, to the best of my knowledge, the information provided is true. I agree and understand any willful misstatement of facts may cause forfeiture of my status in CareerSource Citrus Levy Marion programs and could be cause for legal action. I understand the information is subject to verification and agree to provide such documentation as required. I understand my social security number may be given to other federal, state, and local government or non-government job training agencies for performance tracking purposes.</p>
<h4>DISCRIMINATION PROCEDURES</h4>
<p>If you, as a CareerSource Citrus Levy Marion customer, feel that your rights are being violated due to an act of discrimination based on race, color, sex, national origin, religion, age, marital status, political affiliation or belief, citizenship or disability, you may file a discrimination complaint with CareerSource Citrus Levy Marion’s Equal Opportunity Officer (contact information listed below) or directly to the following agencies: Department of Economic Opportunity (DEO), Office for Civil Rights, 107 East Madison Street, MSC 150,Tallahassee, FL 32399; US Department of Labor Civil Rights Center, 200 Constitution Ave NW, Room N-4123, Washington DC 20210, within 180 days of the alleged occurrence; Equal Employment Opportunity Commission, Miami District Office, One Biscayne Tower Suite 2700, 2 South Biscayne Blvd, Miami FL 33131 within 300 days of alleged offense; FL Commission on Human Relations, 4075 Esplanade Way Room 110, Tallahassee FL 32399 within 365 days of alleged offense.</p>
<h4>GRIEVANCE/COMPLAINT PROCEDURES</h4>
<p>If you feel you have been adversely affected by a decision or action made by CareerSource Citrus Levy Marion personnel and have discussed the matter with the Center Manager or Kathleen Woodring, Chief Operating Officer, CareerSource Citrus Levy Marion, at (352) 873-7939, ext. 1202, you have the right to file a written grievance/complaint to CareerSource Citrus Levy Marion’s Equal Opportunity Officer (contact information listed below) or directly to the DEO (see contact information above). Information on filing a grievance/complaint can be obtained from the CareerSource Citrus Levy Marion’s Equal Opportunity Officer. After the opportunity for a hearing with the local office (within 60 days after formal filing), if you are dissatisfied, you may appeal to the Department of Economic Opportunity, Office for Civil Rights, 107 East Madison Street, MSC 150,Tallahassee, FL 32399. Local EOO: Iris Pozo, 3003 SW College Road Ste. 205, Ocala, FL 34474, (352) 873-7939, ext. 1286 ipozo@careersourceclm.com</p>
<p>I certify that I have received a copy of this form and a copy of DEO OCR notice “Equal Opportunity is the Law”; and that I have read and understand my rights and responsibilities as enumerated in both. I also understand that both this form and the DEO notice will be made a part of my customer file maintained by CareerSource Citrus Levy Marion.</p>
<table class="form">
    <tr class="input-row">
        <td class="field-left">
            <b><?= $user['User']['firstname'] . ' ' . $user['User']['lastname'] ?></b>
        </td>

        <td class="field-center" style="width:25%">
            <b>
                <?php
                if($user['User']['dob'] != NULL){
                    echo date("m/d/Y", strtotime($user['User']['dob']));
                }
                ?>
            </b>
        </td>

        <td class="field-right" style="width:20%">
            <b>
                <?= date('m/d/Y') ?>
            </b>
        </td>
    </tr>

    <tr class="label-row">
        <td class="label-left">
            <p>
                Participant Name(Please print legibly)
            </p>
        </td>

        <td class="label-center">
            <p>
                Date of Birth
            </p>
        </td>

        <td class="label-right">
            <p>
                Date
            </p>
        </td>
    </tr>
</table>

<table class="form">
    <tr class="input-row">
        <td class="field-left">
            <img class="sig" src="<?= APP ?>webroot/img/cache/<?= md5($user['User']['id']).'.png' ?>" />
        </td>

        <td class="field-center">
            <b><?= $user['User']['email'] ?></b>
        </td>
    </tr>

    <tr class="label-row">
        <td class="label-left">
            <p>
                Participant Signature
            </p>
        </td>

        <td class="label-center">
            <p>
                Email Address
            </p>
        </td>
    </tr>
</table>

<?php if(strtotime($user['User']['dob']) > strtotime("-18 years")): ?>
    <p>
        If under 18 years of age, it is required to have a parent or legal guardian sign:
    </p>

    <table class="form">
        <tr class="input-row">
            <td class="field-left" style="height:20px">
                <b>
                    <?= ($user['User']['guardian'] != NULL ? $user['User']['guardian'] : "") ?>
                </b>
            </td>

            <td class="field-center">
                <?php if($user['User']['guardian'] != NULL): ?>
                    <img class="sig" src="<?= APP ?>webroot/img/cache/<?= md5($user['User']['id'].'guardian') .'.png' ?>" />
                <?php endif ?>
            </td>
        </tr>

        <tr class="label-row">
            <td class="label-left">
                <p>
                    Parent/Guadian (Please print legibly)
                </p>
            </td>

            <td class="label-center">
                <p>
                    Parent/Guardian Signature
                </p>
            </td>
        </tr>
    </table>

<?php endif ?>

<p class="equal-divider">
    =============================================================
</p>

<h3>
    <?= $company_name ?> General Release of Information
</h3>

<p class="copy">
    I hereby give my permission for <?= $company_name ?> Staff to obtain and/or disclose my past, present, and future
    information or records that may be needed for eligibility determination, monitoring and follow-up purposes.
    This information may include, but shall not be limited to: school records, grade records, attendance records,
    employment information, medical records, public assistance records, employment information and vocational
    rehabilitation assessment or evaluation tools. A photocopy/facsimile of this signed consent form may be used
    to obtain/release information authorized by signature on this form.
</p>
<p class="copy">

    It is also my understanding that any information obtained by the above organization will be held
    in strict confidence.
</p>
<p class="copy">
    I understand that I may revoke this consent at any time by providing a written statement indicating
    that my consent to the release of information is no longer given to the party(ies) previously granted permission.
</p>

<table class="form">
    <tr class="input-row">
        <td class="field-left">
            <b>
                <?= $user['User']['firstname'] . ' ' . $user['User']['lastname'] ?>
            </b>
        </td>

        <td class="field-center" style="width:20%">
            <b>
                <?= date('m/d/Y') ?>
            </b>
        </td>
    </tr>

    <tr class="label-row">
        <td class="label-left">
            <p>
                Participant Name (Please print legibly)
            </p>
        </td>

        <td class="label-center">
            <p>
                Date
            </p>
        </td>
    </tr>
</table>

<table class="form">
    <tr class="input-row">
        <td class="field-left">
            <img class="sig" src="<?= APP ?>webroot/img/cache/<?= md5($user['User']['id']).'.png' ?>" />
        </td>

        <td class="field-center">
            <b><?= $user['User']['phone'] ?></b>
        </td>
    </tr>

    <tr class="label-row">
        <td class="label-left">
            <p>
                Participant Signature
            </p>
        </td>

        <td class="label-center">
            <p>
                Phone Number
            </p>
        </td>
    </tr>
</table>

<?php if(strtotime($user['User']['dob']) > strtotime("-18 years")): ?>
    <p>
        If under 18 years of age, it is required to have a parent or legal guardian sign:
    </p>

    <table class="form">
        <tr class="input-row">
            <td class="field-left" style="height:20px">
                <b>
                    <?= ($user['User']['guardian'] == NULL ? "" : $user['User']['guardian']) ?>
                </b>
            </td>

            <td class="field-center">
                <b>
                    <?php if($user['User']['guardian'] != NULL): ?>
                        <img class="sig" src="<?= APP ?>webroot/img/cache/<?= md5($user['User']['id'].'guardian') .'.png' ?>" />
                    <?php endif ?>
                </b>
            </td>
        </tr>

        <tr class="label-row">
            <td class="label-left">
                <p>
                    Parent/Guadian (Please print legibly)
                </p>
            </td>

            <td class="label-center">
                <p>
                    Parent/Guardian Signature
                </p>
            </td>
        </tr>
    </table>

<?php endif ?>

<p class="disclaimer">
    <?= $company_name ?> is an equal opportunity employer/program.
    Auxiliary aids and services are available upon request to individuals with disabilities.
    All voice telephone numbers listed may be reached by persons using TTY/TDD equipment via the
</p>
</body>
<?php return ob_get_clean() ?>
