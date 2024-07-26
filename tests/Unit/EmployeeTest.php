<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Employee;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    public function test_employee_creation()
    {
        // Создаем сотрудника с использованием фабрики
        $employee = Employee::factory()->create();

        // Проверяем, что сотрудник был создан
        $this->assertDatabaseHas('employees', [
            'id' => $employee->id,
            'email' => $employee->email,
        ]);
    }
}
