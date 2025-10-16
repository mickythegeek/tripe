<?php

namespace App\Http\Controllers;


/** 
 *@OA\Info(
 *     version="1.0.0",
 *     title="Tripe Auth API Docs",
 *     description="This is the official API documentation for the Tripe Authentication System. It provides detailed information about tall the available endpoints.",
 *     @OA\Contact(
 *         email="dev@tripe.com"
 *     ),
 *     @OA\License(
 *         name="MIT License",
 *     url="https://opensource.org/Licenseses/MIT"
 *     )
 * )
 * 
 * @OA\Server(
 *     url="https://tripe-pgs8.onrender.com/api",
 *     description="Tripe API Server (Prod)"
 * )
 * 
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     description="Enter token in format: Bearer {token}"
 * )
 * 
*/
abstract class Controller
{
    //
}
