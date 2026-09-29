<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .error { color: #dc2626; font-size: 13px; }
        .success { color: #16a34a; font-weight: bold; }
    </style>
</head>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            background: #ffffff;
            width: 100%;
            max-width: 440px;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08);
        }

        .card h2 {
            color: #0f172a;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 24px;
            text-align: center;
        }

        .alert-success {
            background-color: #dcfce7;
            color: #15803d;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
            border: 1px solid #bbf7d0;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            color: #334155;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
            color: #1e293b;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-group input:focus {
            border-color: #202225;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .form-group input.is-invalid {
            border-color: #ef4444;
        }

        .error {
            color: #dc2626;
            font-size: 12px;
            margin-top: 5px;
            display: block;
            font-weight: 500;
        }

        .btn-submit {
            width: 100%;
            background-color: #1b1919;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 8px;
        }

        .btn-submit:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Formulario de Registro</h2>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Nombre Completo:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" placeholder="Tu nombre y apellido">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" placeholder="ejemplo@correo.com">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" placeholder="••••••••">
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••">
            </div>

            <button type="submit" class="btn-submit">Registrarse</button>
        </form>
    </div>

</body>
</html>