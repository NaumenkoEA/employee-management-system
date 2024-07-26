<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Employee;

class EmployeeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_employee_index()
    {
        // Создаем несколько сотрудников
        Employee::factory()->count(5)->create();

        // Делаем запрос к маршруту получения списка сотрудников
        $response = $this->get('/employees');

        // Проверяем, что ответ успешный
        $response->assertStatus(200);

        // Проверяем, что данные сотрудников присутствуют в ответе
        $response->assertJsonCount(5, 'data');
    }

    public function test_employee_store()
    {
        // Данные для нового сотрудника
        $employeeData = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'hire_date' => '2023-01-01',
            'position' => 'Manager',
            'salary' => 60000,
        ];

        // Делаем запрос к маршруту создания сотрудника
        $response = $this->post('/employees', $employeeData);

        // Проверяем, что ответ успешный
        $response->assertStatus(201);

        // Проверяем, что сотрудник был добавлен в базу данных
        $this->assertDatabaseHas('employees', [
            'email' => 'john.doe@example.com',
        ]);
    }
}
