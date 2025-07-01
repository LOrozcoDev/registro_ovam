
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🥋 Registro Nacional de Organizaciones, Escuelas y Artistas Marciales

Este es un sistema desarrollado en Laravel + Vue 3 + Inertia + Tailwind CSS, que permite registrar, gestionar y visualizar información relacionada con organizaciones, escuelas y artistas marciales en Venezuela.

> En el futuro, este proyecto está pensado para escalar hacia una red social marcial simple, con publicaciones, seguidores, perfiles dinámicos y más.

---

## 🚀 Características principales

- Registro y gestión de:
  - Organizaciones
  - Escuelas y academias
  - Estilos marciales (Martial)
  - Rangos (Ranks) personalizados por estilo
  - Artistas marciales (Usuarios)
- Panel administrativo con dashboard responsivo
- Relación entre usuarios y academias con roles (`instructor`, `estudiante`)
- Relación entre usuarios y rangos con historial de grados
- Sistema escalable y modular con arquitectura limpia
- Preparado para funciones sociales: seguidores, publicaciones, comentarios

---

## 🧱 Tecnologías utilizadas

- **Laravel 10**
- **Vue 3 + Inertia.js**
- **Tailwind CSS**
- **Spatie Laravel Permission**
- **Vite** (para assets frontend)
- **MySQL** o MariaDB
- **PHP 8.2+**
- **Laragon** (ambiente recomendado para desarrollo local)

---

## 🧭 Estructura de carpetas

```
├── app/
│   ├── Models/        ← User, Academy, Martial, Rank, Post, etc.
│   └── Policies/      ← Control de acceso por rol
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── js/
│   │   ├── Pages/     ← Vistas de Vue (Dashboard, Academies, Artists, etc.)
│   │   └── Layouts/   ← AdminLayout, GuestLayout
│   └── views/         ← Fallbacks Blade y plantillas
├── routes/
│   ├── web.php
│   └── api.php
```

---

## ⚙️ Instalación local

1. Clona el repositorio:

```bash
git clone https://github.com/tu-usuario/registro-artes-marciales.git
cd registro-artes-marciales
```

2. Instala las dependencias PHP y JS:

```bash
composer install
npm install
```

3. Copia el archivo `.env` y configura tu base de datos:

```bash
cp .env.example .env
php artisan key:generate
```

4. Ejecuta las migraciones y (opcional) seeders de prueba:

```bash
php artisan migrate --seed
```

5. Compila los assets:

```bash
npm run dev
```

6. Inicia el servidor (o usa Laravel Sail/Laragon):

```bash
php artisan serve
```

---

## 🧪 Acceso al panel

Por defecto, puedes crear usuarios desde la terminal, o usar seeders con usuarios de prueba:

```bash
php artisan tinker
User::factory()->create(['email' => 'admin@example.com'])->assignRole('Admin');
```

---

## 📦 Roadmap

- [x] Gestión de academias y usuarios
- [x] Asignación de rangos y estilos marciales
- [ ] Publicaciones de usuarios (posts)
- [ ] Sistema de seguidores
- [ ] Feed dinámico por estilos, academias o artistas
- [ ] Chat interno o comentarios
- [ ] Perfiles públicos y privados

---

## 🎨 Identidad visual

El proyecto está basado en la estética de la **Organización Venezolana de Artes Marciales**, con paleta de colores:

- 🔵 Azul marcial: `#3b82f6`
- 🔴 Rojo disciplina: `#ef4444`
- 🟡 Amarillo patriota: `#fcd34d`
- ⚫ Negro respeto: `#111827`
- ⚪ Blanco equilibrio: `#ffffff`

---

## 🤝 Contribuciones

¡Eres bienvenido a contribuir!  
Solo abre un issue o un pull request con mejoras, bugs o nuevas ideas.

---

## 🛡️ Licencia

Este proyecto está licenciado bajo la **MIT License**.

---

**Desarrollado con respeto y dedicación por artistas marciales, para artistas marciales.**
