<?php
    $basic_salary = 50000;
    $overtime_pay = 5000;

    $gross_pay = $basic_salary + $overtime_pay;

    $tax = $gross_pay * 0.03;
    $sss = $gross_pay * 0.02;
    $philhealth = 150;
    $pagibig = $gross_pay * 0.01;

    $total_deductions = $tax + $sss + $philhealth + $pagibig;

    $net_pay = $gross_pay - $total_deductions;

    echo "Gross Pay: $gross_pay<br><br>";
    echo "Tax Deduction (3%): $tax<br><br>";
    echo "SSS Deduction (2%): $sss<br><br>";
    echo "PhilHealth Deduction: $philhealth<br><br>";
    echo "Pag-IBIG Deduction (1%): $pagibig<br><br>";
    echo "Total Deductions: $total_deductions<br><br>";
    echo "Net Pay: $net_pay<br><br>";
?>