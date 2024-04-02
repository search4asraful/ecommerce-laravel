@extends('frontend.master')

@section('content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Privacy</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <section>
    <div class="container py-5">
        <p><strong>Privacy Policy</strong></p>

        <p>{{ config('app.name') }} respects your privacy and is committed to protecting it through our compliance with this policy. This policy describes:</p>
        
        <ul>
            <li>The types of information we may collect from you or that you may provide when you visit [Your Favourite E-commerce site] (our &quot;Website&quot;) and our practices for collecting, using, maintaining, protecting, and disclosing that information.</li>
            <li>This policy applies to information we collect:
            <ul>
                <li>On this Website.</li>
                <li>In email, text, and other electronic messages between you and this Website.</li>
                <li>Through mobile and desktop applications you download from this Website, which provide dedicated non-browser-based interaction between you and this Website.</li>
            </ul>
            </li>
            <li>It does not apply to information collected by:
            <ul>
                <li>Us offline or through any other means, including on any other website operated by {{ config('app.name') }} or any third party (including our affiliates and subsidiaries); or</li>
                <li>Any third party (including our affiliates and subsidiaries), including through any application or content (including advertising) that may link to or be accessible from or on the Website.</li>
            </ul>
            </li>
        </ul>
        
        <p><strong>Information We Collect About You and How We Collect It</strong></p>
        
        <p>We collect several types of information from and about users of our Website, including information:</p>
        
        <ul>
            <li>By which you may be personally identified, such as name, postal address, e-mail address, telephone number, or any other identifier by which you may be contacted online or offline (&quot;personal information&quot;);</li>
            <li>That is about you but individually does not identify you, such as company name, job title, or industry; and/or</li>
            <li>About your internet connection, the equipment you use to access our Website, and usage details.</li>
        </ul>
        
        <p>We collect this information:</p>
        
        <ul>
            <li>Directly from you when you provide it to us.</li>
            <li>Automatically as you navigate through the site. Information collected automatically may include usage details, IP addresses, and information collected through cookies, web beacons, and other tracking technologies.</li>
            <li>From third parties, for example, our business partners.</li>
        </ul>
        
        <p><strong>How We Use Your Information</strong></p>
        
        <p>We use information that we collect about you or that you provide to us, including any personal information:</p>
        
        <ul>
            <li>To present our Website and its contents to you.</li>
            <li>To provide you with information, products, or services that you request from us.</li>
            <li>To fulfill any other purpose for which you provide it.</li>
            <li>To carry out our obligations and enforce our rights arising from any contracts entered into between you and us.</li>
            <li>To notify you about changes to our Website or any products or services we offer or provide through it.</li>
            <li>In any other way we may describe when you provide the information.</li>
            <li>For any other purpose with your consent.</li>
        </ul>
        
        <p><strong>Disclosure of Your Information</strong></p>
        
        <p>We may disclose aggregated information about our users, and information that does not identify any individual, without restriction. We may disclose personal information that we collect, or you provide as described in this privacy policy:</p>
        
        <ul>
            <li>To our subsidiaries and affiliates.</li>
            <li>To contractors, service providers, and other third parties we use to support our business.</li>
            <li>To a buyer or other successor in the event of a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of {{ config('app.name') }}&#39;s assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which personal information held by {{ config('app.name') }} about our Website users is among the assets transferred.</li>
            <li>To fulfill the purpose for which you provide it.</li>
            <li>For any other purpose disclosed by us when you provide the information.</li>
            <li>With your consent.</li>
        </ul>
        
        <p>We may also disclose your personal information:</p>
        
        <ul>
            <li>To comply with any court order, law, or legal process, including to respond to any government or regulatory request.</li>
            <li>To enforce or apply our terms of use or terms of sale and other agreements, including for billing and collection purposes.</li>
            <li>If we believe disclosure is necessary or appropriate to protect the rights, property, or safety of {{ config('app.name') }}, our customers, or others. This includes exchanging information with other companies and organizations for the purposes of fraud protection and credit risk reduction.</li>
        </ul>
        
        <p><strong>Your Choices About Our Collection, Use, and Disclosure of Your Information</strong></p>
        
        <p>We strive to provide you with choices regarding the personal information you provide to us. You can set your browser to refuse all or some browser cookies or to alert you when cookies are being sent. If you disable or refuse cookies, please note that some parts of this site may then be inaccessible or not function properly.</p>
        
        <p><strong>Data Security</strong></p>
        
        <p>We have implemented measures designed to secure your personal information from accidental loss and from unauthorized access, use, alteration, and disclosure. All information you provide to us is stored on our secure servers behind firewalls.</p>
        
        <p><strong>Changes to Our Privacy Policy</strong></p>
        
        <p>It is our policy to post any changes we make to our privacy policy on this page. If we make material changes to how we treat our users&#39; personal information, we will notify you through a notice on the Website home page. The date the privacy policy was last revised is identified at the top of the page. You are responsible for ensuring we have an up-to-date active and deliverable email address for you, and for periodically visiting our Website and this privacy policy to check for any changes.</p>
        
        <p><strong>Contact Information</strong></p>
        
        <p>To ask questions or comment about this privacy policy and our privacy practices, contact us at:</p>
        
        <p>{{ config('app.name') }}</p>
        <p>55 Main Street, 2nd Floor, E-Block, New York</p>
        <p>info@example.com</p>
        <p>+000 (123) 456 88</p>
    </div>
</main>
    
@endsection