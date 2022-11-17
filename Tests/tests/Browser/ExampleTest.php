<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    // Home Page.

    public function test_home_page_our_product()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('jobma')
                ->clickLink('Our Product')
                ->waitForLink('Our Product')
                ->click('a[href="https://dev.jobma.com/our-product"]')
                ->assertPathIs('/our-product');
            //  ->screenshot('Our Product');
        });
    }

    public function test_home_page_one_way_video_interviews()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Our Product')
                ->waitForLink('One-Way Video Interviews')
                ->clickLink('One-Way Video Interviews')
                ->assertPathIs('/one-way-video-interviews');
            //  ->screenshot('one-way-video-interviews');
        });
    }
    public function test_home_page_live_video_interviews()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Our Product')
                ->waitForLink('Live Video Interviews')
                ->clickLink('Live Video Interviews')
                ->assertPathIs('/live-video-interviews');
            //  ->screenshot('live-video-interviews');
        });
    }
    public function test_home_page_written_and_audio_assessments()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Our Product')
                ->waitForLink('Written & Audio Assessments')
                ->clickLink('Written & Audio Assessments')
                ->assertPathIs('/written-audio-assessments');
            //  ->screenshot('written-audio-assessments');
        });
    }
    public function test_home_page_Why_Jobma()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Our Product')
                ->waitForLink('Why Jobma?')
                ->clickLink('Why Jobma?')
                ->assertPathIs('/about-us');
            //  ->screenshot('about-us');
        });
    }
    public function test_home_page_Partners()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Our Product')
                ->waitForLink('Partners')
                ->clickLink('Partners')
                ->assertPathIs('/partners');
            //  ->screenshot('Partners');
        });
    }
    public function test_home_page_Pricing()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->waitForLink('Pricing')
                ->click('a[href="https://dev.jobma.com/pricing"]')
                ->assertPathIs('/pricing');
            //  ->screenshot('Pricing');
        });
    }
    public function test_home_page_enterprise_solution()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->waitForLink('Enterprise Solution')
                ->click('a[href="https://dev.jobma.com/custom-enterprise-solution"]')
                ->assertPathIs('/custom-enterprise-solution');
            //  ->screenshot('Enterprise Solution');
        });
    }
    public function test_home_page_Solutions()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Solutions')
                ->waitForLink('Academic Institutions')
                ->clickLink('Academic Institutions')
                ->assertPathIs('/academic-institutions');
            //  ->screenshot('Solutions');
        });
    }
    public function test_home_page_the_SMB_solution()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Solutions')
                ->waitForLink('The SMB Solution')
                ->clickLink('The SMB Solution')
                ->assertPathIs('/the-smb-solution');
            //  ->screenshot('The SMB Solution');
        });
    }
    public function test_home_page_staffing_solutions()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Solutions')
                ->waitForLink('Staffing Solutions')
                ->clickLink('Staffing Solutions')
                ->assertPathIs('/staffing-solutions');
            //  ->screenshot('Staffing Solutions');
        });
    }
    public function test_home_page_view_more()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')

                ->waitForLink('View More')
                ->clickLink('View More')
                ->assertPathIs('/partners');
            //  ->screenshot('View More');
        });
    }

    public function test_home_page_Request_demo()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')

                ->waitForLink('Request Demo')
                ->click('a[href="https://dev.jobma.com/request-demo"]')
                ->assertPathIs('/request-demo')
                // ->screenshot('Request Demo')
                ->whenAvailable('#request_demo', function ($modal) {
                    $modal
                        ->waitForText('name')
                        ->keys('#name', 'Deepak')
                        ->waitFor('#company')
                        ->keys('#company', 'SSI')
                        ->waitFor('#PEmail')
                        ->keys('#PEmail', 'deepaksingh111@mailinator.com')
                        ->waitFor('#telephone')
                        ->keys('#telephone', '9625364138')
                        ->select('#ecountry', '101')
                        ->waitFor('#ecountry')
                        ->select('#state', '38')
                        ->waitFor('#ats')
                        ->keys('#ats', 'abcd')
                        // ->waitForText("I'm not a robot")
                        ->press('#submitDemo');
                });
            //   ->screenshot('Request Demo');
        });
    }

    public function test_home_page_requestdemo()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')

                ->waitForLink('Request Demo')
                ->click('a[href="https://dev.jobma.com/request-demo"]')
                ->assertPathIs('/request-demo')
                // ->screenshot('Request Demo')
                ->whenAvailable('#request_demo', function ($modal) {
                    $modal
                        ->waitForText('name')
                        ->keys('#name', 'Chandan')
                        ->waitFor('#company')
                        ->keys('#company', 'SSI')
                        ->waitFor('#PEmail')
                        ->keys('#PEmail', 'chandanmall21@mailinator.com')
                        ->waitFor('#telephone')
                        ->keys('#telephone', '9625364138')
                        ->select('#ecountry', '101')
                        ->waitFor('#ecountry')
                        ->select('#state', '38')
                        ->waitFor('#ats')
                        ->keys('#ats', 'abcd')
                        // ->waitForText("I'm not a robot")
                        ->press('#submitDemo');
                });
            //   ->screenshot('requestdemo');
        });
    }

    // public function test_home_page_contact_us()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/')
    //         ->waitForLink('Our Product')
    //         ->scrollIntoView('footer li:nth-child(1)')
    //          ->waitForLink('Contact Us')
    //         ->click('a[href="https://dev.jobma.com/contact"]')
    //         ->assertPathIs('/contact')
    //         ->disableFitOnFailure()
    //           ->screenshot('contact');


    //     });
    // }

    public function test_home_page_Sign_Up()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->waitForLink('Sign Up')
                ->click('a[href="https://dev.jobma.com/pricing"]')
                ->assertPathIs('/pricing');
            //   ->screenshot('Sign Up');
        });
    }

    public function test_home_page_Login()
    {
        $this->browse(function (Browser $browser) {
            $browser

                ->clickLink('Login')
                ->assertPathIs('/login');
            //   ->screenshot('Login');
        });
    }

    // Login Page.

    // public function test_login_page()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //             ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
    //             ->keys('#password', 'Dev@123')
    //             ->press('#submitBtn')
    //             ->assertPathIs('/employer/dashboard')
    //              ->visit('/logout');
    //             // ->screenshot('dashboard');
    //     });
    // }

    public function test_forgot_your_password()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->waitForLink('Forgot your password?')
                ->clickLink('Forgot your password?')
                ->assertPathIs('/password/email')

                ->waitForText('Email')
                ->type('jobma_user_name', 'employerjobma12@mailinator.com')
                ->press('#submitBtn');
            //   ->screenshot('Forgot password');
        });
    }
    public function test_login_page_Request_demo()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')

                ->waitForLink('Request Demo')
                ->click('a[href="https://dev.jobma.com/request-demo"]')
                ->assertPathIs('/request-demo')
                // ->screenshot('Request Demo')
                ->whenAvailable('#request_demo', function ($modal) {
                    $modal
                        ->waitForText('name')
                        ->keys('#name', 'Raj')
                        ->waitFor('#company')
                        ->keys('#company', 'SSI')
                        ->waitFor('#PEmail')
                        ->keys('#PEmail', 'raj@mailinator.com')
                        ->waitFor('#telephone')
                        ->keys('#telephone', '9625364138')
                        ->select('#ecountry', '101')
                        ->waitFor('#ecountry')
                        ->select('#state', '38')
                        ->waitFor('#ats')
                        ->keys('#ats', 'abcd')
                        // ->waitForText("I'm not a robot")
                        ->press('#submitDemo');
                });
            //   ->screenshot('Demo');
        });
    }
    public function test_login_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
                ->keys('#password', 'Dev@123')
                ->press('#submitBtn')
                ->assertPathIs('/employer/dashboard');
            //  ->visit('/logout');
            //    ->screenshot('dashboard');
        });
    }
    public function test_quick_links()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links');
            //    ->screenshot('Quick Links');
        });
    }
    public function test_quick_links_plan_details()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Plan Details')
                ->clickLink('Plan Details')
                ->assertPathIs('/employer/my-plan')
                ->waitForLink('Get Add-On')
                ->clickLink('Get Add-On')
                ->assertPathIs('/employer/addons/YnVsa19pbnZpdGF0aW9u')
                ->waitForLink('Buy Now')
                ->clickLink('Buy Now')
                ->assertPathIs('/employer/addons/paymentGatway/MjU=')
                // ->screenshot('Plan Details1')
                ->visit('/employer/my-plan')
                ->assertPathIs('/employer/my-plan')
                ->waitForLink('Get Add-On')
                ->click('a[href="https://dev.jobma.com/employer/addons/c3RvcmFnZQ=="]')
                ->assertPathIs('/employer/addons/c3RvcmFnZQ==')
                ->waitForLink('Buy Now')
                ->clickLink('Buy Now')
                ->assertPathIs('/employer/addons/paymentGatway/MjI=')
                ->clickLink('Cancel')
                ->assertPathIs('/employer/subscriptions')
                ->clickLink('Renew Plan')
                ->assertPathIs('/employer/purchase-subscription/NA==');
            //    ->screenshot('Plan Details2');
        });
    }
    public function test_quick_links_renew_plan()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Renew Plan')
                ->clickLink('Renew Plan')
                ->assertPathIs('/employer/purchase-subscription/NA==');
            //    ->screenshot('Renew Plan');

        });
    }
    public function test_quick_links_transaction_history()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Transaction History')
                ->clickLink('Transaction History')
                ->assertPathIs('/employer/subscription-history')
                ->waitForLink('Subscription')
                ->clickLink('Subscription')
                ->assertPathIs('/employer/subscriptions')
                ->waitForLink('Change Subscription ')
                ->clickLink('Change Subscription ')
                ->assertPathIs('/employer/change-subscription')
                ->visit('/employer/subscriptions')
                ->waitForLink('Renew Plan')
                ->clickLink('Renew Plan')
                ->assertPathIs('/employer/purchase-subscription/NA==');
            //    ->screenshot('Transaction History');

        });
    }
    public function test_quick_links_change_subscription()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Change Subscription')
                ->clickLink('Change Subscription')
                ->assertPathIs('/employer/change-subscription');
            //    ->screenshot('Change Subscription');

        });
    }
    public function test_quick_links_add_sub_account()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink(' Add Sub Account')
                ->clickLink(' Add Sub Account')
                ->assertPathIs('/employer/add-sub-account')
                ->waitForText('Job Approval Authority')
                ->select('#mainApproval', '1')
                ->waitForText('Select Account Status')
                ->select('#approvalFilter', '1');
            //    ->screenshot('Add Sub Account');

        });
    }
    public function test_quick_links_settings()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            // ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            // ->keys('#password', 'Dev@123')
            // ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Settings')
                ->clickLink('Settings')
                ->assertPathIs('/employer/account-settings')
                ->waitForLink(' Company Profile')
                ->clickLink(' Company Profile')
                ->waitForLink('Company Video')
                ->clickLink('Company Video')
                ->waitForLink('Password Settings')
                ->clickLink('Password Settings')
                ->waitForLink('Rating Parameters')
                ->clickLink('Rating Parameters')
                ->waitForLink('SMTP Settings')
                ->clickLink('SMTP Settings')
                ->waitForLink('Preferences')
                ->clickLink('Preferences')
                ->waitForLink('Single Point Contact')
                ->clickLink('Single Point Contact');
            //      ->pause(1000)
            //    ->screenshot('Settings1');

        });
    }
    public function test_quick_links_set_up_an_interview()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            // ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            // ->keys('#password', 'Dev@123')
            // ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Set up an Interview ')
                ->clickLink('Set up an Interview ')
                ->assertPathIs('/employer/setup-an-interview')
                ->waitForText('Select a Job')
                ->select('#job_id', '27555')
                ->press('#withJob')
                ->press('Next')
                ->waitFor('#show_application_form_options')
                ->press('Application Options')
                ->waitForText('Application Form')
                ->press('Back')
                // ->waitForText('Preview')
                // ->press('#showPreviewBtn')

                // ->whenAvailable('#previewmodal', function ($modal) {
                //     $modal
                // ->press('×');
                // })
                ->pause(2000)
                ->waitForText('Name*')
                ->type('jobma_name[]', 'Deepak')
                ->waitForText('Email*')
                ->type('jobma_email[]', 'deepakasingh111@gmail.com')
                ->waitForText('Phone Number')
                ->type('jobma_phone[]', '9625364138')
                ->waitForText('Send')
                ->press('Send');
            //     ->pause('1000')
            //  ->screenshot('Add Sub Account');

        });
    }
    public function test_quick_links_interview_tracking()
    {
        $this->browse(function (Browser $browser) {
            //   $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Interview Tracking')
                ->clickLink('Interview Tracking')
                ->assertPathIs('/employer/video-interview-tracking-new')
                ->waitForText('All Jobs')
                ->select('#searchByJobId', '23032')
                ->waitForText('All')
                ->select('#searchByStatus', '3')
                ->waitForLink('Clear all')
                ->clickLink('Clear all')
                ->waitForText('Show Details')
                ->press('Show Details');
            // ->waitForLink('Evaluate')
            // ->clickLink('Evaluate')
            //      ->pause('1000')
            //    ->screenshot('Interview Tracking');

        });
    }
    public function test_quick_links_posted_jobs()
    {
        $this->browse(function (Browser $browser) {
            //   $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Posted Jobs')
                ->clickLink('Posted Jobs')
                ->assertPathIs('/employer/manageJobs')
                //  ->inputValue('field')
                ->waitForText('Select Jobs Status')
                ->select('#approvalFilter', '1')
                ->waitForText('Select Account')
                ->press('Select Account')
                // ->waitForText('Employer Email check Test')
                // ->press('Employer Email check Test')
                ->waitForText('Approved')
                ->press('Approved')
                ->waitForLink('Disapproved')
                ->clickLink('Disapproved')
                ->waitForLink('Submit')
                ->clickLink('Submit')

                ->visit('/employer/manageJobs')
                ->assertPathIs('/employer/manageJobs')
                ->waitForLink('New Job')
                ->clickLink('New Job')
                ->assertPathIs('/employer/jobposting')
                ->waitForLink('About Job')
                ->clickLink('About Job')
                ->assertPathIs('/employer/jobposting')
                ->waitForText('Job Title*')
                ->type('company_designation', 'Devloper')
                ->waitForText('Job Type')
                ->select('#jobma_job_type', 'Permanent')
                ->waitForText('Job Expiration Date *')
                ->click('#jobma_job_expiration_date')
                ->select('#ui-datepicker-div .ui-datepicker-month', '8')
                ->select('#ui-datepicker-div .ui-datepicker-year', '2023')
                ->clickLink('5')
                ->waitForText('Interview Kit')
                ->select('#job_assessment_kit', '1849')
                ->waitForText('Job Description*')

                ->withinFrame('#cke_1_contents iframe', function ($browser) {
                    $browser->pause(3000)

                        ->type('', 'sbhjshfbvsdh');
                })
                // ->press('Save')
                ->click('#v-pills-tab label')
                ->waitForText('Additional Details')
                ->clickLink('Additional Details')
                ->waitForText('Functional Area')
                ->select('#jobma_job_farea', '59')
                ->waitForText('Select an Industry')
                ->select('#jobma_job_industry', '231')
                ->waitForText('Select minimum experience')
                ->select('#min_Exp', '2')
                ->waitForText('Select maximum experience')
                ->select('#max_Exp', '10')
                ->waitForText('Available After')
                ->select('#jobma_job_notice', '1')
                ->waitForText('Compensation')
                ->select('#jobma_job_salary_type', 'PAYPERMONTH')
                ->waitForText('Minimum salary')
                ->type('min_salary', '20000')
                ->waitForText('Maximum salary')
                ->type('max_salary', '60000')
                ->waitForText('Currency')
                ->select('#jobma_job_currency', '1')
                ->waitForText('Job Location')
                ->clickLink('Job Location')
                ->waitForText('Type your address here to add')
                ->keys('#addresspicker_map', 'Gorakhpur, Uttar Pradesh, India')
                ->waitForText('Address*')
                ->type('#locality', 'Padri Bazar')
                ->waitForText('City*')
                ->type('#administrative_area_level_2', 'Gorakhpur')
                ->waitForText('State/Province*')
                ->type('#administrative_area_level_1', 'Uttar Pradesh')
                ->waitForText('Country*')
                ->type('#country', 'India')
                ->waitForText('Postal/Zip Code*')
                ->type('#postal_code', '273014')
                ->waitForLink('Add Location')
                ->clickLink('Add Location')
                ->waitForLink('Company Details')
                ->clickLink('Company Details')
                ->waitForText('Company Details')
                ->type('#company_desc', 'A to Z')
                ->waitForText('Company Name')
                ->type('#company_name', 'Wipro')
                ->waitForText('Company Website')
                ->type('#company_website', 'www.wipro.com')
                ->waitForText('Name')
                ->type('#jobma_recruiter_name', 'Chandan')
                ->waitForText('Email')
                ->type('#jobma_recruiter_email', 'chandan@gmail.com')
                ->waitForText('Phone Number')
                ->type('#recruiter_phone', '1234567890')
                ->waitForText('Extension Number')
                ->type('#recruiter_ext', '24860')
                ->press('Save')
                ->waitForLink('Reconnect')
                ->clickLink('Reconnect')
                ->whenAvailable('#monsterModel', function ($modal) {
                    $modal
                        ->clickLink('Save');
                })
                ->pause(1000)
                ->waitForText('Skip')
                ->click('#skipPostLink')
                ->waitForText('Action')
                ->press('Action')
                ->waitForLink('Edit')
                ->clickLink('Edit')
                // ->assertPathIs('/employer/jobposting/MjkzNjk=')
                ->waitForLink('About Job')
                ->clickLink('About Job')
                ->waitForText('Job Title*')
                ->type('company_designation', 'Devloper')
                ->waitForText('Job Type')
                ->select('#jobma_job_type', 'Permanent')
                ->waitForText('Job Expiration Date *')
                ->click('#jobma_job_expiration_date')
                ->select('#ui-datepicker-div .ui-datepicker-month', '8')
                ->select('#ui-datepicker-div .ui-datepicker-year', '2022')
                ->clickLink('6')
                ->waitForText('Interview Kit')
                ->select('#job_assessment_kit', '1849')
                ->waitForText('Job Description*')

                ->withinFrame('#cke_1_contents iframe', function ($browser) {
                    $browser->pause(3000)

                        ->type('', 'sbhjshf');
                })
                ->waitForLink('Additional Details')
                ->clickLink('Additional Details')
                ->waitForText('Functional Area')
                ->select('#jobma_job_farea', '59')
                ->waitForText('Industry')
                ->select('#jobma_job_industry', '74')
                ->waitForText('Select minimum experience')
                ->select('#min_Exp', '2')
                ->waitForText('Select maximum experience')
                ->select('#max_Exp', '10')
                ->waitForText('Available After')
                ->select('#jobma_job_notice', '1')
                ->waitForText('Compensation')
                ->select('#jobma_job_salary_type', 'ANNUALLY')
                ->waitForText('Minimum salary')
                ->type('min_salary', '30000')
                ->waitForText('Maximum salary')
                ->type('max_salary', '80000')
                ->waitForText('Currency')
                ->select('#jobma_job_currency', '1')
                ->waitForLink('Job Location')
                ->clickLink('Job Location')
                ->waitForText('Type your address here to add')
                ->keys('#addresspicker_map', 'Gorakhpur, Uttar Pradesh, India')
                ->waitForText('Address*')
                ->type('#locality', 'Padri Bazar')
                ->waitForText('City*')
                ->type('#administrative_area_level_2', 'Gorakhpur')
                ->waitForText('State/Province*')
                ->type('#administrative_area_level_1', 'Uttar Pradesh')
                ->waitForText('Country*')
                ->type('#country', 'India')
                ->waitForText('Postal/Zip Code*')
                ->type('#postal_code', '273003')
                ->waitForLink('Company Details')
                ->clickLink('Company Details')
                ->press('Save');
            //      ->pause(1000)
            //    ->screenshot('quick links posted jobs');

        });
    }
    public function test_quick_links_add_new_interview_kit()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Add New Interview Kit')
                ->clickLink('Add New Interview Kit')
                ->assertPathIs('/employer/interview-assessment-kit-add')
                ->waitForText('Title')
                ->type('kit_title', 'Question kit')
                ->waitForText('Interview Type')
                ->press('Default')
                ->click('.custom-radio label')
                ->waitForText('Pre Defined Interview Kit')
                ->select('#default-kits', '5729')
                ->assertPathIs('/employer/interview-assessment-kit-add')
                ->waitForLink('Add Media')
                ->clickLink('Add Media')
                ->back()
                ->waitForLink('Add Welcome Note')
                ->clickLink('Add Welcome Note')
                ->waitForLink('Add Exit Note')
                ->clickLink('Add Exit Note');
            // ->pause('1000')
            // ->screenshot('Add New Interview Kit');
        });
    }
    public function test_quick_links_Post_a_Job()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Post a Job')
                ->clickLink('Post a Job')
                ->assertPathIs('/employer/jobposting')
                ->waitForLink('About Job')
                ->clickLink('About Job')
                ->assertPathIs('/employer/jobposting')
                ->waitForText('Job Title*')
                ->type('company_designation', 'Devloper')
                ->waitForText('Job Type')
                ->select('#jobma_job_type', 'Permanent')
                ->waitForText('Interview Kit')
                ->select('#job_assessment_kit', '1849')
                ->waitForText('Job Description*')

                ->withinFrame('#cke_1_contents iframe', function ($browser) {
                    $browser->pause(3000)

                        ->type('', 'sbhjshfbvsdh');
                })
                ->click('#v-pills-tab label')
                ->waitForText('Additional Details')
                ->clickLink('Additional Details')
                ->waitForText('Functional Area')
                ->select('#jobma_job_farea', '59')
                ->waitForText('Select an Industry')
                ->select('#jobma_job_industry', '231')
                ->waitForText('Select minimum experience')
                ->select('#min_Exp', '2')
                ->waitForText('Select maximum experience')
                ->select('#max_Exp', '10')
                ->waitForText('Available After')
                ->select('#jobma_job_notice', '1')
                ->waitForText('Compensation')
                ->select('#jobma_job_salary_type', 'PAYPERMONTH')
                ->waitForText('Minimum salary')
                ->type('min_salary', '20000')
                ->waitForText('Maximum salary')
                ->type('max_salary', '60000')
                ->waitForText('Currency')
                ->select('#jobma_job_currency', '1')
                ->waitForText('Job Location')
                ->clickLink('Job Location')
                ->waitForText('Type your address here to add')
                ->keys('#addresspicker_map', 'Gorakhpur, Uttar Pradesh, India')
                ->waitForText('Address*')
                ->type('#locality', 'Padri Bazar')
                ->waitForText('City*')
                ->type('#administrative_area_level_2', 'Gorakhpur')
                ->waitForText('State/Province*')
                ->type('#administrative_area_level_1', 'Uttar Pradesh')
                ->waitForText('Country*')
                ->type('#country', 'India')
                ->waitForText('Postal/Zip Code*')
                ->type('#postal_code', '273014')
                ->waitForLink('Add Location')
                ->clickLink('Add Location')
                ->waitForLink('Company Details')
                ->clickLink('Company Details')
                ->waitForText('Company Details')
                ->type('#company_desc', 'A to Z')
                ->waitForText('Company Name')
                ->type('#company_name', 'Wipro')
                ->waitForText('Company Website')
                ->type('#company_website', 'www.wipro.com')
                ->waitForText('Name')
                ->type('#jobma_recruiter_name', 'Chandan')
                ->waitForText('Email')
                ->type('#jobma_recruiter_email', 'chandan@gmail.com')
                ->waitForText('Phone Number')
                ->type('#recruiter_phone', '1234567890')
                ->waitForText('Extension Number')
                ->type('#recruiter_ext', '24860');
            // ->pause('1000')
            // ->screenshot('Quick links Post a Job');
        });
    }
    public function test_quick_links_request_an_integration()
    {
        $this->browse(function (Browser $browser) {
            //   $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Request an integration')
                ->clickLink('Request an integration')
                ->assertPathIs('/employer/social-configuration')
                ->waitForLink('Request an integration')
                ->clickLink('Request an integration')
                ->assertPathIs('/employer/social-configuration')
                ->whenAvailable('#intergration-request-modal', function ($modal) {
                    $modal
                        ->waitForText('Application Name')
                        ->type('applicationName', 'Deepak Singh')
                        ->waitForText('Type')
                        ->select('integrationType', '1')
                        ->waitForText('Website')
                        ->type('website', 'Jobma')
                        ->waitForText('Other Details')
                        ->type('otherDtls', 'Jobma is a good Live interview website')
                        ->press('Close');
                })
                ->visit('/logout');
            //      ->pause('1000')
            //    ->screenshot('Quick links request an integration');

        });
    }
    public function test_quick_links_email_template()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
                ->keys('#password', 'Dev@123')
                ->press('#submitBtn')
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Email template')
                ->clickLink('Email template')
                ->assertPathIs('/employer/jobma_manage_credit/etemplate')
                ->waitForLink('Edit Master Template')
                ->clickLink('Edit Master Template')
                ->pause('1000')
                ->waitFortext('Action')
                ->press('Action')
                ->waitForLink('Save')
                ->clickLink('Save')
                // ->waitForText('Publish')
                ->press('Publish')
                ->waitForLink('Go Back')
                ->clickLink('Go Back');

            // ->pause('5000')
            // ->screenshot('Quick links Email template');
        });
    }
    public function test_quick_links_storage_analysis()
    {
        $this->browse(function (Browser $browser) {
            //   $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Storage Analysis')
                ->clickLink('Storage Analysis')
                ->assertPathIs('/employer/storage')
                ->waitForLink('Manage')
                ->clickLink('Manage')
                ->assertPathIs('/employer/storage-settings')
                ->visit('/employer/storage')
                ->assertPathIs('/employer/storage')
                ->waitForLink('Manage')
                ->click('a[href="https://dev.jobma.com/employer/storage-settings"]');
            //      ->pause('1000')
            //    ->screenshot('Quick links Storage Analysis');

        });
    }
    public function test_quick_links_question_library()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
                ->keys('#password', 'Dev@123')
                ->press('#submitBtn')
                // $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Question Library')
                ->clickLink('Question Library')
                ->assertPathIs('/employer/interview-assessment-question-library')
                ->waitForLink('Edit')
                ->clickLink('Edit')
                ->whenAvailable('#question_modal', function ($modal) {
                    $modal
                        ->waitForText('Edit Question')
                        ->type('customQues', 'abcd')
                        ->waitForLink('Save')
                        ->clickLink('Save');
                    // ->press('Close'); 
                });
            // ->pause(5000)
            // ->waitForLink('Delete')
            // ->clickLink('Delete')
            // ->waitForText('Are you sure want to delete?')
            // ->press('Yes')
            //      ->pause(1000)
            //    ->screenshot('Quick links  Question Library');

        });
    }
    public function test_quick_links_live_interview()
    {
        $this->browse(function (Browser $browser) {
            //   $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink('Live Interview')
                ->clickLink('Live Interview')
                ->assertPathIs('/employer/setup-an-interview')
                ->waitForLink('Interview scheduling')
                ->click('a[href="https://dev.jobma.com/employer/live-interview-schedule"]')
                ->assertPathIs('/employer/live-interview-schedule')
                ->clickLink('Settings')
                ->assertPathIs('/employer/live-interview-schedule')
                ->whenAvailable('#slotSetting-modal', function ($modal) {
                    $modal
                        ->waitForText('Number of days')
                        ->type('rolling_days', '2')
                        ->waitForText('Timezone')
                        ->select('#timezoneJQ', 'Asia/Kolkata')
                        ->press('Save');
                })
                ->pause(1000)
                // ->screenshot('Interview scheduling');
                ->select('#pn_calendar_month_selector', '8')
                ->select('#pn_calendar_year_selector', '2023')
                ->assertPathIs('/employer/live-interview-schedule')
                ->clickLink('Back')
                ->assertPathIs('/employer/setup-an-interview')

                ->waitForText('Select a Job')
                ->select('#job_id', '27556')
                ->press('#withJob')
                ->press('Next')
                ->waitFor('#show_application_form_options')
                ->press('Application Options')
                ->waitForText('Application Form')
                ->press('Back')
                // ->waitForText('Preview')
                // ->press('#showPreviewBtn')

                // ->whenAvailable('#previewmodal', function ($modal) {
                //     $modal
                // ->press('×');
                // })
                ->pause(2000)
                ->waitForText('Name*')
                ->type('jobma_name[]', 'Deepak')
                ->waitForText('Email*')
                ->type('jobma_email[]', 'deepakasingh111@gmail.com')
                ->waitForText('Phone Number')
                ->type('jobma_phone[]', '9625364138')
                ->waitForText('Send')
                ->press('Send')
                ->assertPathIs('/employer/setup-an-interview');

            //      ->pause('1000')
            //    ->screenshot('Quick links  Live Interviewy');

        });
    }
    public function test_quick_links_report_an_issue()
    {
        $this->browse(function (Browser $browser) {
            //   $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForText('Quick Links')
                ->press('Quick Links')
                ->waitForLink(' Report an Issue')
                ->clickLink(' Report an Issue')
                ->assertPathIs('/issue/report')
                ->waitForText('Subject*')
                ->type('subject', 'Uploading Issue')
                ->waitForText('Enter Message*')
                ->type('message', 'Remove the image uploading issue')
                ->assertPathIs('/issue/report')
                ->waitForLink('Dashboard')
                ->clickLink('Dashboard')
                ->assertPathIs('/employer/dashboard');
            //      ->pause('1000')
            //    ->screenshot('Quick links  Report an Issue');

        });
    }
    public function test_Recent_Selected_View_All()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('View All')
                ->clickLink('View All')
                ->assertPathIs('/employer/manageinterviews/Mg==');
            // ->waitForText('Selected')
            // ->select('evaluate_status','1')
            // ->waitForLink('Evaluate ')
            // ->clickLink('Evaluate ')
            //   ->screenshot('Recent_Selected_View_All');

        });
    }
    public function test_Upcoming_Interviews_interview_scheduling()
    {
        $this->browse(function (Browser $browser) {
            //     $browser->visit('/login')
            //         ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //         ->keys('#password', 'Dev@123')
            //         ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('Interview scheduling')
                ->click('a[href="https://dev.jobma.com/employer/live-interview-schedule"]')
                ->assertPathIs('/employer/live-interview-schedule')
                ->clickLink('Settings')
                ->assertPathIs('/employer/live-interview-schedule')
                ->whenAvailable('#slotSetting-modal', function ($modal) {
                    $modal
                        ->waitForText('Number of days')
                        ->type('rolling_days', '2')
                        ->waitForText('Timezone')
                        ->select('#timezoneJQ', 'Asia/Kolkata')
                        ->press('Save');
                })
                ->pause(1000)
                // ->screenshot('Interview scheduling');
                ->select('#pn_calendar_month_selector', '8')
                ->select('#pn_calendar_year_selector', '2023')
                ->assertPathIs('/employer/live-interview-schedule')
                ->clickLink('Back')
                ->assertPathIs('/employer/setup-an-interview')
                //    ->waitForLink('Interview scheduling')
                //    ->clickLink('Interview scheduling')
                // ->clickLink('Back')
                ->waitForText('Select a Job')
                ->select('#job_id', '27555')
                ->press('#withJob')
                ->press('Next')
                ->waitFor('#show_application_form_options')
                ->press('Application Options')
                ->waitForText('Application Form')
                ->press('Back')
                // ->waitForText('Preview')
                // ->press('#showPreviewBtn')

                // ->whenAvailable('#previewmodal', function ($modal) {
                //     $modal
                // ->press('×');
                // })
                ->pause(2000)
                ->waitForText('Name*')
                ->type('jobma_name[]', 'Deepak')
                ->type('jobma_email[]', 'deepakasingh111@gmail.com')
                ->type('jobma_phone[]', '9625364138')
                ->waitForText('Send')
                ->press('Send');
            //     ->pause('1000')
            // ->screenshot('Interview scheduling');
        });
    }
    public function test_Upcoming_Interviews_view_all()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            // ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            // ->keys('#password', 'Dev@123')
            // ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('View All')
                ->click('a[href="https://dev.jobma.com/employer/interviews-calendar#live-interview"]')
                ->assertPathIs('/employer/interviews-calendar')
                ->waitForLink('All')
                ->clickLink('All')
                ->waitForLink('Pre Recorded Interview')
                ->clickLink('Pre Recorded Interview')
                ->waitForLink('Live Interview')
                ->clickLink('Live Interview')
                ->waitForLink('Phone Call Interview')
                ->clickLink('Phone Call Interview')
                ->waitForLink('Track Progress')
                ->clickLink('Track Progress')
                ->assertPathIs('/employer/video-interview-tracking-new');
            //   ->visit('/employer/interviews-calendar#live-interview');
            //  ->waitForLink('Set up an Interview')
            //  ->clickLink('Set up an Interview')
            //    ->click('a[href="https://dev.jobma.com/employer/setup-an-interview"]')
            //  ->screenshot('Upcoming Interviews View All');
        });
    }


    public function test_SubAccountsviewall()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            // ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            // ->keys('#password', 'Dev@123')
            // ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('View All')
                ->click('a[href="https://dev.jobma.com/employer/add-sub-account"]')
                ->assertPathIs('/employer/add-sub-account')
                ->waitForText('Job Approval Authority')
                ->select('#mainApproval', '1')
                ->waitForText('Select Account Status')
                ->select('#approvalFilter', '1')
                ->waitForLink('Add sub user')
                ->clickLink('Add sub user')
                ->whenAvailable('#addSubUserDiv', function ($modal) {
                    $modal
                        ->waitForText('Full Name*')
                        ->keys('#first_name', 'Deepak Singh')
                        ->waitForText('Email*')
                        ->keys('#email', 'deepaksingh111@mailinator.com')
                        ->waitForText('Password*')
                        ->keys('#password', 'Deepak@123')
                        ->waitForText('Confirm Password*')
                        ->keys('#confirm_password', 'Deepak@123')
                        ->press('Close');
                })
                ->assertPathIs('/employer/add-sub-account');
            // ->waitForLink('Access Account')
            // ->clickLink('Access Account')
            // ->press('Click here')

            //    ->pause('1000')
            //  ->screenshot('Sub Accounts View All');
        });
    }

    public function test_postajobnew1()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('Post a Job')
                ->clickLink('Post a Job');
            //    ->screenshot('Dashboard Post a Job');

        });
    }
    public function test_Trackdashboard()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('Track')
                ->clickLink('Track');
            //    ->screenshot('Dashboard Track');

        });
    }
    // public function test_Set_up_an_Interview()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //         ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
    //         ->keys('#password', 'Dev@123')
    //         ->press('#submitBtn')
    //         // $browser->visit('/employer/dashboard')
    //             ->assertPathIs('/employer/dashboard')
    //             ->waitForLink('Set up an Interview')
    //             //  ->click('a[href="https://dev.jobma.com/employer/setup-an-interview"]')
    //            ->screenshot('Set up an Interview');

    //     });
    // }

    public function test_selected()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('Selected')
                ->clickLink('Selected');
            //   ->screenshot('Selected');

        });
    }

    public function test_on_hold()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('On Hold')
                ->clickLink('On Hold');
            //   ->screenshot('On Hold');

        });
    }
    public function test_pending()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('Pending')
                ->clickLink('Pending');
            //   ->screenshot('Pending');

        });
    }
    public function test_rejected()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('Rejected')
                ->clickLink('Rejected');
            //   ->screenshot('Rejected');

        });
    }

    public function test_set_up_an_intervew()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
                ->keys('#password', 'Dev@123')
                ->press('#submitBtn')
           // $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Set up an Interview')
                ->waitForLink('Interview Kit')
                ->click('a[href="https://dev.jobma.com/employer/interview-assessment-kit"]')
                ->assertPathIs('/employer/interview-assessment-kit')
                ->waitForLink('Add New Interview Kit')
                ->clickLink('Add New Interview Kit')
                ->waitForLink('Create your own')
                ->clickLink('Create your own')
                ->press('Next')
                ->assertPathIs('/employer/interview-assessment-kit-add')
                ->waitForText('Title')
                ->type('kit_title', 'Live Interview')
                ->waitForText('Interview Type')
                ->press('Default')
                ->click('.custom-radio label')
                ->waitForText('Pre Defined Interview Kit')
                ->select('#default-kits', '5729')
                ->assertPathIs('/employer/interview-assessment-kit-add')
                ->waitForLink('Add Media')
                ->clickLink('Add Media')
                ->back()
                ->waitForLink('Add Welcome Note')
                ->clickLink('Add Welcome Note')
                ->waitForLink('Add Exit Note')
                ->clickLink('Add Exit Note')
                ->waitForLink('Video')
                ->clickLink('Video')
                ->whenAvailable('#qtypeModal', function ($modal) {
                    $modal
                        // ->textArea()
                        ->pause(5000)
                        ->keys('textarea', 'hjfhkkj')
                        ->press('Add');
                })
                ->pause(7000)
                // ->clickLink('Essay')
                ->waitForLink('MCQ')
                ->clickLink('MCQ')
                ->whenAvailable('#quesForm', function ($modal) {
                    $modal
                        ->waitForText('MCQ Question*')
                        ->keys('#customQuesAsses', 'Number of primitive data types in Java are?')
                        ->keys('#Option13', '6')
                        ->keys('#Option23', '8')
                        ->click('#div_Scnt div:nth-child(2) span')
                        ->press('#addQuesbtn');
                })
                ->pause(7000)
                ->waitForLink('Essay')
                ->clickLink('Essay')
                ->whenAvailable('#qtypeModal', function ($modal) {
                    $modal
                        ->pause(5000)
                        ->waitForText('Essay Question*')
                        ->keys('textarea', 'abcdef')
                        ->press('Add');
                })
                ->pause(7000)
                ->waitForLink('Audio')
                ->clickLink('Audio')
                ->whenAvailable('#qtypeModal', function ($modal) {
                    $modal

                        ->pause(5000)
                        ->waitForText('Audio Question*')
                        ->keys('textarea', 'What is the size of float and double in java?')
                        ->press('Add');
                })
                ->pause(7000)
                ->waitForLink('Question Library')
                ->clickLink('Question Library')
                ->whenAvailable('#qLibraryModal', function ($modal) {
                    $modal

                        ->pause(5000)
                        ->waitForText('Library Questions')
                        ->keys('#srchQues', 'Ext')
                        ->click('#iElementlibraryQues22329')
                        ->press('Close');
                })
                ->pause(7000)
                ->waitForLink('Add Slide')
                ->clickLink('Add Slide')
                ->whenAvailable('#qtypeModal', function ($modal) {
                    $modal

                        ->pause(5000)
                        ->waitForText('Slide *')
                        ->keys('textarea', 'Slide_1')
                        ->press('Add');
                })
                ->pause(7000)
                ->waitForLink('Edit Slide')
                ->clickLink('Edit Slide')
                ->whenAvailable('#qtypeModal', function ($modal) {
                    $modal

                        ->pause(5000)
                        ->waitForText('Slide *')
                        ->keys('textarea', 'Slide_2')
                        ->press('Add');
                })
                ->pause(7000)
                ->waitForLink('Slide Library')
                ->clickLink('Slide Library')
                ->whenAvailable('#sLibraryModal', function ($modal) {
                    $modal

                        ->pause(5000)
                        ->waitForText('Slide Library')
                        ->keys('#srchSlide', 'def')
                        ->click('#add_slide')
                        ->press('Close');
                })
                ->pause(1000)
                ->fitContent()
                //   ->screenshot('Interview Kit1')
                ->click('#added_list .submitQ')
                ->waitForLink('Question Library')
                ->clickLink('Question Library')
                ->assertPathIs('/employer/interview-assessment-question-library')
                ->waitForLink('Edit')
                ->clickLink('Edit')
                ->whenAvailable('#question_modal', function ($modal) {
                    $modal
                        ->pause(5000)
                        ->waitForText('Audio Question*')
                        ->clear('#customQuesEdit')
                        ->keys('#customQuesEdit', 'Which type of Programming does Python support?')
                        ->clickLink('Save');
                })
                ->pause(1000)
                ->waitForLink('Options')
                ->clickLink('Options')
                ->waitForLink('Live Interview')
                ->clickLink('Live Interview')
                ->click('#added_list .submitQ')
                ->assertPathIs('/employer/interview-assessment-kit')
            ->pause(1000)
            ->screenshot('Interview Kit');
        });
    }

    public function test_post_a_job()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Set up an Interview')
                ->waitForLink('Post a Job')
                ->clickLink('Post a Job')
                ->assertPathIs('/employer/jobposting')
                ->waitForLink('About Job')
                ->clickLink('About Job')
                ->assertPathIs('/employer/jobposting')
                ->waitForText('Job Title*')
                ->type('company_designation', 'Devloper')
                ->waitForText('Job Type')
                ->select('#jobma_job_type', 'Permanent')
                ->waitForText('Interview Kit')
                ->select('#job_assessment_kit', '1849')
                ->waitForText('Job Description*')

                ->withinFrame('#cke_1_contents iframe', function ($browser) {
                    $browser->pause(3000)

                        ->type('', 'sbhjshfbvsdh');
                })
                ->click('#v-pills-tab label')
                ->waitForText('Additional Details')
                ->clickLink('Additional Details')
                ->waitForText('Functional Area')
                ->select('#jobma_job_farea', '59')
                ->waitForText('Select an Industry')
                ->select('#jobma_job_industry', '231')
                ->waitForText('Select minimum experience')
                ->select('#min_Exp', '2')
                ->waitForText('Select maximum experience')
                ->select('#max_Exp', '10')
                ->waitForText('Available After')
                ->select('#jobma_job_notice', '1')
                ->waitForText('Compensation')
                ->select('#jobma_job_salary_type', 'PAYPERMONTH')
                ->waitForText('Minimum salary')
                ->type('min_salary', '20000')
                ->waitForText('Maximum salary')
                ->type('max_salary', '60000')
                ->waitForText('Currency')
                ->select('#jobma_job_currency', '1')
                ->waitForText('Job Location')
                ->clickLink('Job Location')
                ->waitForText('Type your address here to add')
                ->keys('#addresspicker_map', 'Gorakhpur, Uttar Pradesh, India')
                ->waitForText('Address*')
                ->type('#locality', 'Padri Bazar')
                ->waitForText('City*')
                ->type('#administrative_area_level_2', 'Gorakhpur')
                ->waitForText('State/Province*')
                ->type('#administrative_area_level_1', 'Uttar Pradesh')
                ->waitForText('Country*')
                ->type('#country', 'India')
                ->waitForText('Postal/Zip Code*')
                ->type('#postal_code', '273014')
                ->waitForLink('Add Location')
                ->clickLink('Add Location')
                ->waitForLink('Company Details')
                ->clickLink('Company Details')
                ->waitForText('Company Details')
                ->type('#company_desc', 'A to Z')
                ->waitForText('Company Name')
                ->type('#company_name', 'Wipro')
                ->waitForText('Company Website')
                ->type('#company_website', 'www.wipro.com')
                ->waitForText('Name')
                ->type('#jobma_recruiter_name', 'Chandan')
                ->waitForText('Email')
                ->type('#jobma_recruiter_email', 'chandan@gmail.com')
                ->waitForText('Phone Number')
                ->type('#recruiter_phone', '1234567890')
                ->waitForText('Extension Number')
                ->type('#recruiter_ext', '24860');
            //  ->screenshot('Post a Job');

        });
    }

    public function test_schedule_interview()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Set up an Interview')
                ->waitForLink('Schedule Interview')
                ->clickLink('Schedule Interview')
                ->assertPathIs('/employer/setup-an-interview')
                ->waitForLink('Interview scheduling')
                ->click('a[href="https://dev.jobma.com/employer/live-interview-schedule"]')
                ->assertPathIs('/employer/live-interview-schedule')
                ->clickLink('Settings')
                ->assertPathIs('/employer/live-interview-schedule')
                ->whenAvailable('#slotSetting-modal', function ($modal) {
                    $modal
                        ->waitForText('Number of days')
                        ->type('rolling_days', '2')
                        ->waitForText('Timezone')
                        ->select('#timezoneJQ', 'Asia/Kolkata')
                        ->press('Save');
                })
                ->pause(1000)
                // ->screenshot('Interview scheduling');
                ->select('#pn_calendar_month_selector', '8')
                ->select('#pn_calendar_year_selector', '2023')
                ->assertPathIs('/employer/live-interview-schedule')
                ->clickLink('Back')
                ->assertPathIs('/employer/setup-an-interview')

                ->waitForText('Select a Job')
                ->select('#job_id', '27556')
                ->press('#withJob')
                ->press('Next')
                ->waitFor('#show_application_form_options')
                ->press('Application Options')
                ->waitForText('Application Form')
                ->press('Back')
                // ->waitForText('Preview')
                // ->press('#showPreviewBtn')

                // ->whenAvailable('#previewmodal', function ($modal) {
                //     $modal
                // ->press('#previewmodal .close');
                // })
                ->pause(5000)
                ->waitForText('Name*')
                ->type('jobma_name[]', 'Deepak')
                ->waitForText('Email*')
                ->type('jobma_email[]', 'deepakasingh111@gmail.com')
                ->waitForText('Phone Number')
                ->type('jobma_phone[]', '9625364138')
                ->waitForText('Send')
                ->press('Send')
                ->assertPathIs('/employer/setup-an-interview');
                // ->pause(2000)
                // ->screenshot('Schedule Interview');
        });
    }
    public function test_interview_link()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Set up an Interview')
                ->waitForLink('Interview Link')
                ->clickLink('Interview Link');
            //  ->screenshot('Interview Link');

        });
    }
    public function test_applicants_evaluate()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Applicants')
                ->waitForLink('Evaluate')
                ->clickLink('Evaluate')
                ->clickLink('Total')
                ->waitForLink('Total')
                ->select('#mainDivId div:nth-child(2) div:nth-child(2) div.col-12.col-md-3.mb-3.ml-auto select', '3')
                ->pause(5000)
                ->select('#total-applicants-tab div.table-responsive tr:nth-child(2) td:nth-child(3) select', '3')
                ->pause(3000)
                ->withinFrame('#cke_1_contents iframe', function ($browser) {
                    $browser
                        ->type('', 'abcd');
                })
                ->pause(3000)
                ->press('Close')
                ->pause(3000)
                ->assertPathIs('/employer/manageinterviews/YWxs')
                ->waitForLink('Pending')
                ->clickLink('Pending')
                ->waitForLink('Selected')
                ->clickLink('Selected')
                ->waitForLink('Rejected')
                ->clickLink('Rejected')
                ->waitForLink('On Hold')
                ->clickLink('On Hold')
                ->waitForLink('Deleted')
                ->clickLink('Deleted')
                ->waitForLink('Live Interview')
                ->clickLink('Live Interview')
                ->waitForLink('Pre-Recorded Interview')
                ->clickLink('Pre-Recorded Interview')
                ->pause(5000)
                ->type('#mainDivId div:nth-child(2) div:nth-child(2) div:nth-child(1) input', 'vsfvdsf')
                ->press('#mainDivId div:nth-child(2) div:nth-child(2) div:nth-child(1) button');

            // ->pause(5000)
            // ->screenshot('Evaluate');
        });
    }
    public function test_applicants_track()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Applicants')
                ->waitForLink('Track')
                ->clickLink('Track')
                ->assertPathIs('/employer/invitations')
                ->click('#posted_on')
                ->type('daterangepicker_start', '04/07/2022')
                ->type('daterangepicker_end', '30/07/2022')
                ->pause(1000)
                ->press('Apply')
                ->waitForText('Select')
                ->select('.simple-select2', '1')
                ->waitForText('All')
                ->select(' main div div div:nth-child(5) div select', '2')
                ->waitForLink('Invitation Logs')
                ->clickLink('Invitation Logs')
                ->waitForLink('Track Progress')
                ->clickLink('Track Progress')
                // ->click('#appliedDate')
                // ->type('daterangepicker_start','04/07/2022')
                // ->type('daterangepicker_end','28/07/2022')
                // ->press('Apply')
                ->waitForText('All')
                ->select('#searchByStatus', '2')
                ->assertPathIs('/employer/video-interview-tracking-new')
                ->pause(2000)
                ->waitForText('Show Details')
                ->press('#loadTracking li:nth-child(1) div:nth-child(4) button')
                ->clickLink('Clear all')
                ->visit('/employer/invitations')
                ->waitForLink('Auto Reminder')
                ->clickLink('Auto Reminder')
                ->whenAvailable('#setupAutoReminderModal', function ($modal) {
                    $modal
                        ->waitForText('Select Days:')
                        ->select('#reminder_days', '4')
                        ->press('Setup');
                })
                ->pause(5000)
                ->assertPathIs('/employer/invitations')
                ->pause(5000)
                ->click('div div.row div div div a:nth-child(3)')
                ->assertPathIs('/employer/setup-an-interview')
                ->waitForText('Select a Job')
                ->select('#job_id', '27555')
                ->press('#withJob')
                ->press('Next')
                ->waitFor('#show_application_form_options')
                ->press('Application Options')
                ->waitForText('Application Form')
                ->press('Back')
                // ->waitForText('Preview')
                // ->press('#showPreviewBtn')

                // ->whenAvailable('#previewmodal', function ($modal) {
                //     $modal
                // ->press('×');
                // })
                ->pause(2000)
                ->waitForText('Name*')
                ->type('jobma_name[]', 'Deepak')
                ->waitForText('Email*')
                ->type('jobma_email[]', 'deepakasingh111@gmail.com')
                ->waitForText('Phone Number')
                ->type('jobma_phone[]', '9625364138')
                ->waitForText('Send')
                ->press('Send');
            // ->pause(5000)
            // ->screenshot('Track');
        });
    }
    public function test_applicants_shared_interviews()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Applicants')
                ->waitForLink('Shared Interviews')
                ->clickLink('Shared Interviews');
            //   ->screenshot('Shared Interviews');

        });
    }

    public function test_sub_accounts()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Sub Accounts')
                ->waitForLink('Add sub user')
                ->clickLink('Add sub user')
                ->whenAvailable('#addSubUserDiv', function ($modal) {
                    $modal
                        ->waitForText('Full Name*')
                        ->keys('#first_name', 'Deepak Singh')
                        ->waitForText('Email*')
                        ->keys('#email', 'deepaksingh111@mailinator.com')
                        ->waitForText('Password*')
                        ->keys('#password', 'Deepak@123')
                        ->waitForText('Confirm Password*')
                        ->keys('#confirm_password', 'Deepak@123')
                        ->press('Close');
                })
                ->pause(1000)
                ->waitForText('Job Approval Authority')
                ->select('#mainApproval', '1')
                ->waitForText('Select Account Status')
                ->select('#approvalFilter', '1')
                ->waitForText('Action')
                ->select('.simple-select', 'active');
            //    ->pause(5000)
            //  ->screenshot('Add sub user');

        });
    }
    public function test_Reports()
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            //     ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
            //     ->keys('#password', 'Dev@123')
            //     ->press('#submitBtn')
                 $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Reports')
                ->waitForLink('Reports')
                ->click('a[href="https://dev.jobma.com/employer/applicant-tracking-reports"]')
                ->assertPathIs('/employer/applicant-tracking-reports')
                ->waitforText('Invitation Listing')
                ->click('#managereport-tab li:nth-child(1)')
                ->waitForText('Invitation Status')
                ->select('#inviteStatus', '2')
                ->select('#paymentStatus', '1')
                ->select('#jobPostId', '23032')
                ->clickLink('Generate')
                ->assertPathIs('/employer/generate-report/eyJwYXltZW50U3RhdHVzIjoiMSIsImludml0ZVN0YXR1cyI6IjIiLCJqb2JQb3N0SWQiOiIyMzAzMiIsImZldGNoVHlwZSI6Imludml0ZUxpc3RpbmcifQ==')
                ->clickLink('Back')
                ->waitforText('Interview Count')
                ->click('#managereport-tab li:nth-child(2)')
                ->waitForText('Search By Applied Date Range')
                ->click('#start_date_range')
                ->select('.ui-datepicker-month', '1')
                ->select('.ui-datepicker-year', '2021')
                ->clickLink('16')
                ->click('#end_date_range')
                ->select('.ui-datepicker-month', '4')
                ->select('.ui-datepicker-year', '2022')
                ->clickLink('10')
                ->select('#jobPostIdInCount', '23039')
                ->clickLink('Generate')
                ->press('Share')
                ->whenAvailable('#shareExcelFile', function ($modal) {
                    $modal
                        ->waitForText('Share To*')
                        ->select('shareToId', '5364')
                        ->waitForText('Message')
                        ->type('#shareMsg', 'Testing for Share Button')
                        ->press('Send');
                })
                ->pause(4000)
                ->clickLink('Back')
                ->waitforText('Applicant Tracking System')
                ->click('#managereport-tab li:nth-child(3)')
                ->select('#sourceId', '9')
                ->select('#atsStatus', '1')
                ->select('#paymentStatusAts', '1')
                ->waitForText('Search By Applied Date Range')
                ->click('#ats_start_date_range')
                ->select('.ui-datepicker-month', '0')
                ->select('.ui-datepicker-year', '2019')
                ->clickLink('16')
                ->click('#ats_end_date_range')
                ->select('.ui-datepicker-month', '4')
                ->select('.ui-datepicker-year', '2022')
                ->clickLink('10')
                ->clickLink('Generate')
                ->clickLink('Back')
                ->pause(1000)
                ->waitforText('Jobs Listing')
                ->click('#managereport-tab li:nth-child(4)')
                ->waitForText('Posted Between')
                ->keys('#start_posted_date_range', '2021/3/25')
                ->keys('#end_posted_date_range', '2022/6/10')
                ->waitForText('Job Approval Status')
                ->select('#mainApproval', '1')
                ->select('#approvalFilter', '1')
                ->select('#subUserFilter', '5735')
                ->clickLink('Generate')
                ->clickLink('Back')
                ->waitForLink('My Reports')
                ->clickLink('My Reports')
                ->waitForLink('View')
                ->click('a[href="https://dev.jobma.com/employer/get-manage-reports/SW52aXRlIExpc3Rpbmc="]')
                ->clickLink('Back')
                ->clickLink('My Reports')
                ->pause(1000)
                ->click('a[href="https://dev.jobma.com/employer/get-manage-reports/SW50ZXJ2aWV3IENvdW50"]')
                ->clickLink('Back')
                ->clickLink('My Reports')
                ->pause(1000)
                ->click('a[href="https://dev.jobma.com/employer/get-manage-reports/SW50ZWdyYXRpb25zIEludGVydmlldyBMaXN0aW5n"]')
                ->clickLink('Back')
                ->clickLink('My Reports')
                ->pause(1000)
                ->click('a[href="https://dev.jobma.com/employer/get-manage-reports/Sm9iIHBvc3QgTGlzdGluZw=="]')
                ->clickLink('Back')
                ->waitForLink('Share With Me')
                ->clickLink('Share With Me')
                ->waitForLink('View')
                ->click('a[href="https://dev.jobma.com/employer/shared-reports/SW52aXRlIExpc3Rpbmc="]')
                ->clickLink('Back')
                ->clickLink('Share With Me')
                ->pause(1000)
                ->click('a[href="https://dev.jobma.com/employer/shared-reports/SW50ZXJ2aWV3IENvdW50"]')
                ->clickLink('Back')
                ->clickLink('Share With Me')
                ->pause(1000)
                ->click('a[href="https://dev.jobma.com/employer/shared-reports/SW50ZWdyYXRpb25zIEludGVydmlldyBMaXN0aW5n"]')
                ->clickLink('Back')
                ->clickLink('Share With Me')
                ->pause(1000)
                ->click('a[href="https://dev.jobma.com/employer/shared-reports/Sm9iIHBvc3QgTGlzdGluZw=="]')
                ->clickLink('Back')
                ->waitForLink('Evaluate Report')
                ->clickLink('Evaluate Report')
                ->waitForText('Select Job')
                ->select('#evaluatedJobs','23032')
                ->assertPathIs('/employer/applicant-tracking-reports')
                ->waitForLink('Interview Analysis')
                ->clickLink('Interview Analysis')
                ->waitForText('Applied On')
                ->click('#appliedDate')
                ->type('daterangepicker_start','2022/07/19')
               ->type('daterangepicker_end','2022/08/19')
               ->press('Apply')
                ->waitForText('Job')
                // ->click('#select2-searchByJobId-container')
                ->select('#searchByJobId','0')
                ->select('#searchByBrowser','CHROME')
                ->select('#searchByLocation','India');

                // ->pause(5000)
                // ->screenshot('Reports');
        });
    }
    public function test_Expenditure()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Reports')
                ->waitForLink('Expenditure')
                ->clickLink('Expenditure');
            //   ->screenshot('Expenditure');

        });
    }
    public function test_reportsStorage()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Reports')
                ->waitForLink('Storage')
                ->clickLink('Storage');
            //   ->screenshot('Storage');

        });
    }
    public function test_integrations()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Integrations')
                ->waitForLink('Integrations')
                ->click('a[href="https://dev.jobma.com/employer/social-configuration"]');
            //   ->screenshot('Integrations');

        });
    }
    public function test_integrations_interview_listing()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Integrations')
                ->waitForLink('Interview Listing')
                ->clickLink('Interview Listing');
            //    ->screenshot('Interview Listing');

        });
    }
    public function test_customization_email_template()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Customization')
                ->waitForLink('Email Template')
                ->clickLink('Email Template');
            // ->screenshot('Email Template');

        });
    }
    public function test_customization_evaluation_template()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Customization')
                ->waitForLink('Evaluation Template')
                ->clickLink('Evaluation Template');
            // ->screenshot('Evaluation Template');

        });
    }
    public function test_customization_interview_template()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Customization')
                ->waitForLink('Interview Template')
                ->clickLink('Interview Template');
            // ->screenshot('Interview Template');

        });
    }
    public function test_customization_rating_parameters()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Customization')
                ->waitForLink('Rating Parameters')
                ->clickLink('Rating Parameters');
            // ->screenshot('Rating Parameters');

        });
    }
    public function test_billing_subscription()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->waitForLink('Billing')
                ->clickLink('Billing')
                ->waitForLink('Subscription')
                ->clickLink('Subscription');
            // ->screenshot('Subscription');

        });
    }
    public function test_billing_transaction_history()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Billing')
                ->waitForLink('Transaction History')
                ->clickLink('Transaction History');
            // ->screenshot('Transaction History');

        });
    }
    public function test_billing_payment_method()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                ->clickLink('Billing')
                ->waitForLink('Payment Method')
                ->clickLink('Payment Method');
            //  ->screenshot('Payment Method');

        });
    }
    public function test_credits_unlimited_plan()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                // ->clickLink('Settings')
                ->waitForLink('Billing')
                ->clickLink('Unlimited Plan');
            //  ->screenshot('Credits');

        });
    }
    public function test_settings()
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                // ->clickLink('Settings')
                ->waitForLink('Billing')
                ->click('a[href="https://dev.jobma.com/employer/account-settings"]')
                ->assertPathIs('/employer/account-settings')
                ->waitForLink(' Company Profile')
                ->clickLink(' Company Profile')
                ->waitForLink('Company Video')
                ->clickLink('Company Video')
                ->waitForLink('Password Settings')
                ->clickLink('Password Settings')
                ->waitForLink('Rating Parameters')
                ->clickLink('Rating Parameters')
                ->waitForLink('SMTP Settings')
                ->clickLink('SMTP Settings')
                ->waitForLink('Preferences')
                ->clickLink('Preferences')
                ->waitForLink('Single Point Contact')
                ->clickLink('Single Point Contact');
            // ->pause(1000)
            //   ->screenshot('Settings');


        });
    }
    public function test_logout()
    {
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/employer/dashboard')
                ->assertPathIs('/employer/dashboard')
                // ->clickLink('Settings')
                ->waitForLink('Billing')
                ->click('a[href="https://dev.jobma.com/logout"]');
            //  ->screenshot('Logout');

        });
    }

    // public function test_View_All()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //         ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
    //         ->keys('#password', 'Dev@123')
    //         ->press('#submitBtn')
    //         ->assertPathIs('/employer/dashboard')
    //             ->waitForLink('View All')
    //             ->clickLink('View All')
    //            ->screenshot('View All');

    //     });
    // }

    // public function test_selected()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //         ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
    //         ->keys('#password', 'Dev@123')
    //         ->press('#submitBtn')
    //         ->assertPathIs('/employer/dashboard')
    //             ->waitForLink('Selected')
    //             ->clickLink('Selected')
    //           ->screenshot('Selected');

    //     });
    // }
    // public function test_on_hold()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //         ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
    //         ->keys('#password', 'Dev@123')
    //         ->press('#submitBtn')
    //         ->assertPathIs('/employer/dashboard')
    //             ->waitForLink('On Hold')
    //             ->clickLink('On Hold')
    //           ->screenshot('On Hold');

    //     });
    // }

    // public function test_pending()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //         ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
    //         ->keys('#password', 'Dev@123')
    //         ->press('#submitBtn')
    //         ->assertPathIs('/employer/dashboard')
    //             ->waitForLink('Pending')
    //             ->clickLink('Pending')
    //           ->screenshot('Pending');

    //     });
    // }
    // public function test_rejected()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //         ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
    //         ->keys('#password', 'Dev@123')
    //         ->press('#submitBtn')
    //         ->assertPathIs('/employer/dashboard')
    //             ->waitForLink('Rejected')
    //             ->clickLink('Rejected')
    //           ->screenshot('Rejected');

    //     });
    // }

    // public function test_home_page(){
    //     $this->browse(function (Browser $browser) {
    //         $browser
    //         ->visit('/login')
    //         ->waitForText('Login')
    //         ->clickLink('Back to Home')
    //         ->waitForLink('Our Product')
    //         ->assertSee('Easy-to-use Interface')
    //         ->screenshot('home');
    //     });
    // }

}
    /*
    public function test_employer_dashboard()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->pause(5000)
                ->keys('#jobma_user_name', 'employerjobma12@mailinator.com')
                ->keys('#password', 'Dev@123')
                ->press('#submitBtn')
                ->assertPathIs('/employer/dashboard')

                ->click('a[href="https://dev.jobma.com/employer/manageinterviews/Mg=="]')
                
                // ->pause(5000)
                // ->clickLink('Set up an Interview')
                // ->click('a[href="https://dev.jobma.com/employer/interview-assessment-kit"]')
                //   ->screenshot('Mange Sub Account')
                ->visit('/employer/dashboard')
                ->waitForLink('Post a Job')
                ->clickLink('Post a Job')
                //   ->pause(5000)
                //   ->visit('/employer/dashboard')
                ->pause(5000)
                ->clickLink('Set up an Interview')
                ->waitForLink('Schedule Interview')
                ->clickLink('Schedule Interview')
                ->pause(5000)
                ->clickLink('Set up an Interview')
                ->waitForLink('Interview Link')
                ->clickLink('Interview Link')
                ->pause(5000)
                ->clickLink('Applicants')
                ->waitForLink('Evaluate')
                ->clickLink('Evaluate')
                //   ->visit('/employer/dashboard')
                ->waitForLink('Applicants')
                ->clickLink('Applicants')
                ->waitForLink('Track')
                ->clickLink('Track')

                ->clickLink('Applicants')
                ->waitForLink('Shared Interviews')
                ->clickLink('Shared Interviews')
                ->clickLink('Sub Accounts')
                ->waitForLink('Add sub user')
                ->clickLink('Add sub user')

                ->whenAvailable('#addSubUserDiv', function ($modal) {
                    $modal
                        ->waitForText('Full Name*')
                        ->keys('#first_name', 'Deepak Singh')
                        ->waitForText('Email*')
                        ->keys('#email', 'deepaksingh111@mailinator.com')
                        ->waitForText('Password*')
                        ->keys('#password', 'Deepak@123')
                        ->waitForText('Confirm Password*')
                        ->keys('#confirm_password', 'Deepak@123')
                        ->press('Close');
                })
                //  ->pause(5000)
                // ->screenshot('Add sub user')
                ->pause(5000)
                ->clickLink('Reports')
                ->waitForLink('Reports')
                ->click('a[href="https://dev.jobma.com/employer/applicant-tracking-reports"]')

                ->clickLink('Reports')
                ->waitForLink('Expenditure')
                ->clickLink('Expenditure')

                ->clickLink('Reports')
                ->waitForLink('Storage')
                ->clickLink('Storage')
                //    ->screenshot('Expenditure') 
                ->pause(5000)
                ->clickLink('Integrations')
                ->waitForLink('Interview Listing')
                ->click('a[href="https://dev.jobma.com/employer/social-configuration"]')
                // ->screenshot('Expenditure')

                ->clickLink('Integrations')
                ->waitForLink('Interview Listing')
                ->clickLink('Interview Listing')
                //  ->screenshot('Listing') 
               
                ->clickLink('Customization')
                ->waitForLink('Email Template')
                ->clickLink('Email Template')

                ->clickLink('Customization')
                ->waitForLink('Evaluation Template')
                ->clickLink('Evaluation Template')
                ->clickLink('Go Back')
                 ->pause(5000)
                ->clickLink('Customization')
                ->waitForLink('Interview Template')
                ->clickLink('Interview Template')

                ->clickLink('Customization')
                ->waitForLink('Rating Parameters')
                ->clickLink('Rating Parameters')
                ->screenshot('Rating Parameters')
                ->pause(5000)
                ->clickLink('Billing')
                ->waitForLink('Subscription')
                ->clickLink('Subscription')

                ->clickLink('Billing')
                ->waitForLink('Transaction History')
                ->clickLink('Transaction History')
                ->pause(5000)
                ->clickLink('Billing')
                ->waitForLink('Payment Method')
                ->clickLink('Payment Method')
                ->screenshot('Payment Method');

            //    ->assertPathIs('/employer/jobposting')
            // ->click('a[href="https://dev.jobma.com/employer/add-sub-account"]')
            // ->select('mainApproval')
            //  ->screenshot('mainApproval')
            // ->select('approvalFilter')
            // ->inputValue('#searchBox');
            // ->press('#searchSubAccount');
        });
    }
}
*/