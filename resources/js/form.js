jQuery(document).ready(function ($) {
    // Adds ##verify-your-insurance in a span tag right beneath the insurance gravity form from tag in a span.
    $('.insurance_page_form_section.insurance_verification_shortcode_section form .gform_body').attr('id', 'verify-your-insurance');

    // Loops through each interjection_stripe_section style and removes </span> because it was populating. Didn't figure out why.
    $('.interjection_stripe_section').each(function (i) {
        let interjectionStyleCssString = $(this).attr('style');
        let interjectionStyleCssStringWithoutSpan = interjectionStyleCssString.replace('</span>', '')
        $(this).attr('style', interjectionStyleCssStringWithoutSpan)
    })
});
