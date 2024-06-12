<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Sheet</title>
    <style>
  body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h4 {
            margin: 5px 0;
            font-size: 20px;
        }

        header h6 {
            margin: 5px 0;
            font-size: 14px;
        }

        h5, h4 {
            text-align: center;
            margin: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #dddddd;
            text-align: left;
            font-size:10px;
        }

        th {
            background-color: #f2f2f2;
           
        }

    </style>
</head>
<body>

<header>
            <h4>GOVERNMENT ARTS COLLEGE (AUTONOMOUS)<br>COIMBATORE-641 018.</h4>
            <h6>ESTD:1852 - RE-ACCREDITED WITH 'A' GRADE BY NACC<br>
            (Affiliated to Bharathiar University)</h6>
            <h5>CHOICE BASED CREDIT SYSTEM</h5>
            <h4>STATEMENT OF MARKS</h4>
        </header>

        <div>
            <table>
                <tr>
                    <td><strong>NAME OF THE CANDIDATE</strong></td>
                    <td><strong>REGISTER NO.</strong></td>
                    <td><strong>DEGREE</strong></td>
                </tr>
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->register_no }}</td>
                    <td>{{ $student->degree }}</td>
                </tr>
                <tr>
                    <td><strong>BRANCH</strong></td>
                    <td><strong>DATE OF BIRTH</strong></td>
                    <td><strong>Month & YEAR</strong></td>
                </tr>
                <tr>
                    <td>{{ $student->branch }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->month_year_exam }}</td>
                </tr>
            </table>
        </div>
    

    <table>
        <thead>
            <tr>
                <th>PART</th>
            <th>SEMESTER </th>
            <th>SUBJECT CODE</th>
                <th>TITLE OF THE PAPER</th>
                <th> <table>  <th colspan="6">MARKS</th>  
            
            <tr>
                  <th colspan="3">MAXIMUM</th>
            <th colspan="3">SECURED</th>
             </tr>
                <tr>
                  <th>ESE</th>
                    <th>CIA</th>
                    <th>TOTAL</th>
                  <th>ESE</th>
                  <th>CIA</th>
                  <th>TOTAL</th>
                </tr>
              </table></th>
                <th>CR</th>
                <th>GRADE <br>POINT</th>
                <th>GR</th>
                <th>RESULT</th>
              
            </tr>
        </thead>
        <tbody>
            <td>I</td>
          <td>  {{ $student->semester }}</td>
            @foreach ($marks as $mark)
            <tr>
                <td>{{ $mark->subject }}</td>
                <td>{{ $mark->marks }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
