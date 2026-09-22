<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>New Appointment</title>
</head>

<body style="margin:0; padding:0; background:#f5f7fa; font-family:Arial, sans-serif;">

    <div style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden;">

        <div style="background:#172965; padding:25px; text-align:center;">

            <h2 style="margin:0; color:#ffffff;">
                New Appointment
            </h2>

            <p style="margin:8px 0 0; color:#dbe4ff;">
                Atulya Super Speciality Hospital & ICU
            </p>

        </div>

        <div style="padding:30px;">

            <p style="margin-top:0;">
                A new appointment has been booked from the website.
            </p>

            <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">

                <tr>
                    <td style="font-weight:bold; width:40%; border-bottom:1px solid #eeeeee;">
                        Patient Name
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $appointment->name }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Phone
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $appointment->phone }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Department
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $appointment->department
                            ? ucwords($appointment->department)
                            : 'Not selected' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Doctor
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $appointment->doctor?->name ?? 'Not selected' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Appointment Date
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $appointment->appointment_date
                            ? $appointment->appointment_date->format('d M Y')
                            : '-' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Appointment Time
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        {{ $appointment->appointment_time
                            ? \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A')
                            : 'Not selected' }}
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; border-bottom:1px solid #eeeeee;">
                        Status
                    </td>

                    <td style="border-bottom:1px solid #eeeeee;">
                        Pending
                    </td>
                </tr>

                <tr>
                    <td style="font-weight:bold; vertical-align:top;">
                        Message
                    </td>

                    <td>
                        {{ $appointment->message ?: 'No message provided.' }}
                    </td>
                </tr>

            </table>

            <div style="margin-top:25px; padding:15px; background:#f5f7fa; border-radius:6px;">

                <strong>
                    Action Required
                </strong>

                <p style="margin:7px 0 0;">
                    Please review this appointment from the admin panel and contact the patient.
                </p>

            </div>

        </div>

    </div>

</body>
</html>