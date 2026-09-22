<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>New Job Application</title>
</head>

<body style="margin:0; padding:0; background:#f5f7fa; font-family:Arial, sans-serif;">

    <div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden;">

        <div style="background:#172965; padding:25px; text-align:center;">

            <h2 style="margin:0; color:#ffffff;">
                New Job Application
            </h2>

            <p style="margin:8px 0 0; color:#dbe4ff;">
                Atulya Super Speciality Hospital & ICU
            </p>

        </div>

        <div style="padding:30px;">

            <p style="margin-top:0;">
                A new candidate has applied for a job from the website.
            </p>

            <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">

                <tr>
                    <td style="font-weight:bold; width:40%; border-bottom:1px solid #eeeeee;">
                        Job Position
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $application->job?->title ?? 'Not available' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Candidate Name
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $application->name }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Email
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $application->email }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Phone
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $application->phone }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Department
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $application->job?->department ?? 'Not specified' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Location
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $application->job?->location ?? 'Not specified' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Employment Type
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $application->job?->employment_type ?? 'Not specified' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Experience
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $application->job?->experience ?? 'Not specified' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Application Status
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ ucfirst($application->status) }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; vertical-align:top;">
                        Message
                    </td>

                    <td>
                        {{ $application->message ?: 'No message provided.' }}
                    </td>
                </tr>

            </table>

            <div style="margin-top:25px; padding:15px; background:#f5f7fa; border-radius:6px;">

                <strong>
                    Resume Attached
                </strong>

                <p style="margin:7px 0 0;">
                    The candidate's resume is attached to this email for review.
                </p>

            </div>

            <div style="margin-top:15px; padding:15px; background:#f5f7fa; border-radius:6px;">

                <strong>
                    Action Required
                </strong>

                <p style="margin:7px 0 0;">
                    Please review the candidate's application and resume from the admin panel.
                </p>

            </div>

        </div>

    </div>

</body>
</html>