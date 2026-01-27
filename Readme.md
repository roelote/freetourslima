# FreeWalking Template - WordPress Theme

Tema child de WordPress para sitio de tours y paseos gratuitos. Incluye funcionalidad de reservas con calendario interactivo y integración con Advanced Custom Fields (ACF).

## 🚀 Características

- **Diseño Responsive**: Construido con Tailwind CSS
- **Sistema de Reservas**: Calendario interactivo con Air Datepicker
- **Campos Personalizados**: Integración completa con ACF para detalles de tours
- **Multilenguaje**: Compatible con WPML (Español/Inglés)
- **Plantillas Personalizadas**: 
  - `page-tours.php` - Plantilla para páginas de tours con sidebar de reservas
  - Templates para categorías, archivo, autor, etc.

## 📋 Requisitos

- WordPress 5.0+
- PHP 7.4+
- Node.js y npm (para compilar Tailwind CSS)
- Advanced Custom Fields (ACF) plugin
- WPML plugin (opcional, para multilenguaje)

## 🛠️ Instalación

1. **Clonar o descargar el tema** en `/wp-content/themes/`

2. **Instalar dependencias de npm**:
```bash
npm install
```

3. **Compilar CSS**:
```bash
# Desarrollo (watch mode)
npm run dev

# Producción (minificado)
npm run build
```

4. **Activar el tema** desde el panel de WordPress

5. **Configurar ACF**: Importar o crear los siguientes grupos de campos:
   - `details` - Para detalles del tour (precio, duración, idioma)
   - `details_2` - Para información de consulta

## 📁 Estructura del Proyecto

```
freewalkingtemplate/
├── src/
│   ├── input.css          # CSS principal de Tailwind
│   ├── output.css         # CSS compilado (generado)
│   ├── calendar-init.js   # Inicialización del calendario
│   └── calendar-styles.css # Estilos personalizados del calendario
├── img/                   # Imágenes del tema
├── page-tours.php         # Plantilla para páginas de tours
├── functions.php          # Funciones y configuración del tema
├── header.php             # Cabecera
├── footer.php             # Pie de página
├── home.php               # Página de inicio
├── category.php           # Plantilla de categorías
├── aside.php              # Sidebar
├── package.json           # Dependencias de npm
├── tailwind.config.js     # Configuración de Tailwind CSS
└── README.md              # Este archivo
```

## 🎨 Desarrollo

### Scripts disponibles

```bash
npm run dev    # Inicia compilador de Tailwind en modo watch
npm run build  # Compila CSS para producción (minificado)
```

### Modificar estilos

Los estilos se encuentran en `src/input.css`. Después de hacer cambios:
- En desarrollo: `npm run dev` actualizará automáticamente los cambios
- Para producción: `npm run build` generará CSS optimizado

### Sistema de Calendario

El calendario usa **Air Datepicker v3.5.0** con:
- Visualización inline siempre visible
- Formato de fecha: dd/mm/yyyy
- Localización en español
- Estilos personalizados en `src/calendar-styles.css`

## 🔧 Configuración ACF

### Grupo de campos "details"
- `title_price` - Título del precio
- `price` - Precio del tour
- `title_duration` - Título de duración
- `duration` - Duración del tour
- `title_lang` - Título de idioma
- `lang` - Idioma del tour

### Grupo de campos "details_2"
- `consult` - Texto de consulta
- `question` - Texto del enlace
- `link` - URL del enlace de consulta

## 📝 Uso de Plantillas

### Plantilla de Tours (`page-tours.php`)

Asignar esta plantilla a cualquier página para mostrar:
- Contenido del tour con ACF
- Sidebar con detalles (precio, duración, idioma)
- Formulario de reserva con calendario

## 🌐 Multilenguaje

El tema es compatible con WPML. Los strings están preparados para traducción con:
```php
pll_e('string');  // Para echo
pll__('string');  // Para return
```

## 📦 Dependencias

### NPM
- Tailwind CSS v3.4.19

### CDN (cargadas en functions.php)
- Air Datepicker v3.5.0
- Swiper.js (para sliders)

## 🤝 Tema Padre

Este es un tema child de **freewalking**. Asegúrate de tener el tema padre instalado y activado.

## 📄 Licencia

Tema propietario para uso interno.

---

**Versión**: 1.0.0  
**Última actualización**: 2025
            </div>

            <!-- Review Items -->
            <div class="flex flex-col gap-[32px] mt-[32px]">
                <!-- Review 1 -->
                <div class="bg-[#f5f5f5] rounded-[8px] p-[28px]" id="590_548_360_1733_1200_172">
                    <div class="flex flex-row justify-start items-center w-full">
                        <div class="flex flex-col gap-[8px] flex-1">
                            <div class="flex flex-row justify-start items-center w-full">
                                <div class="flex flex-row items-end gap-[8px]">
                                    <img src="../assets/images/img_imagen_2.png" class="w-[20px] h-[14px] rounded-[6px]"
                                        alt="flag" id="590:632" />
                                    <img src="../assets/images/img_group_134.png" class="w-[94px] h-[18px]"
                                        alt="5 stars" id="590:633" />
                                </div>
                                <h4 class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[106px]"
                                    id="590:627">Fascinating!</h4>
                            </div>

                            <div class="flex flex-row justify-between items-start w-full">
                                <p class="text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']"
                                    id="590:631">Alison Rummel</p>
                                <p class="text-[16px] font-normal leading-[27px] text-[#5c5c5c] font-['Nunito_Sans'] w-[76%]"
                                    id="590:626">
                                    Richard was wonderful! He was so knowledgable and friendly. Learned more about
                                    the Incas that I never knew!<br>Really enjoyed this tour!
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-row justify-center items-center w-[18%]">
                            <div class="w-[1px] h-[112px] bg-[#cfd1d3]" id="590:630"></div>
                            <div class="flex flex-col gap-[6px] items-end w-[72%]">
                                <p class="text-[14px] font-normal leading-[19px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:628">09 / December / 2025</p>
                                <p class="text-[14px] font-normal italic leading-[20px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:629">Viajó en familia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="bg-[#f5f5f5] rounded-[8px] p-[28px]" id="719:391">
                    <div class="flex flex-row justify-start items-start w-full">
                        <div class="flex flex-row justify-center items-center w-[14%]">
                            <div class="flex flex-col gap-[8px] items-start w-full">
                                <div class="flex flex-row items-center">
                                    <img src="../assets/images/img_imagen_6.png" class="w-[20px] h-[14px] rounded-[6px]"
                                        alt="flag" id="590:652" />
                                    <img src="../assets/images/img_group_134.png" class="w-[94px] h-[18px] ml-[8px]"
                                        alt="5 stars" id="590:646" />
                                </div>
                                <p class="text-[16px] font-normal leading-[21px] text-[#5c5c5c] font-['Nunito_Sans']"
                                    id="590:645">Michael Soros Wong</p>
                            </div>
                        </div>

                        <div class="flex flex-row gap-[34px] justify-center items-center flex-1">
                            <div class="flex flex-col gap-[8px] items-start w-[84%]">
                                <h4 class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']"
                                    id="590:641">Fascinating experiences!</h4>
                                <p class="text-[16px] font-normal leading-[27px] text-[#5c5c5c] font-['Nunito_Sans']"
                                    id="590:640">
                                    <span>Excellent tour, strolling through the entire historic city of Cusco. Its
                                        streets, markets, temples, and churches. With Richard as your guide, you get
                                        a spectacular view of the city. Don't miss this experience! took this 2-hour
                                        tour of Cusco and it truly exceeded my.<br><br>Starting the tour, the guide
                                        was kind.<br><br></span>
                                    <span class="underline">Leer más</span>
                                </p>
                            </div>

                            <div class="w-[1px] h-[220px] bg-[#ced1d2]" id="590:644"></div>
                            <div class="flex flex-col gap-[6px] items-end w-[12%]">
                                <p class="text-[14px] font-normal leading-[19px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:642">09 / December / 2025</p>
                                <p class="text-[14px] font-normal italic leading-[20px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:643">Viajó en familia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="bg-[#f5f5f5] rounded-[8px] p-[28px]" id="719:388">
                    <div class="flex flex-row justify-start items-start w-full">
                        <div class="flex flex-col gap-[6px] items-start w-[14%]">
                            <div class="flex flex-row items-center">
                                <img src="../assets/images/img_imagen_6_14x20.png"
                                    class="w-[20px] h-[14px] rounded-[6px]" alt="flag" id="590:669" />
                                <img src="../assets/images/img_group_134.png" class="w-[94px] h-[18px] ml-[8px]"
                                    alt="5 stars" id="590:663" />
                            </div>
                            <p class="text-[16px] font-normal leading-[21px] text-[#5c5c5c] font-['Nunito_Sans']"
                                id="590:662">Kumar Gandhi Mahatma</p>
                        </div>

                        <div class="flex flex-row justify-start items-start flex-1 px-[18px]">
                            <div class="flex flex-row justify-start items-center flex-1">
                                <div class="flex flex-col gap-[10px] items-start flex-1 ml-[18px]">
                                    <h4 class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']"
                                        id="590:655">Awesome guide in English</h4>
                                    <p class="text-[16px] font-normal leading-[27px] text-[#5c5c5c] font-['Nunito_Sans']"
                                        id="590:654">
                                        Richard was wonderful! He was so knowledgable and friendly. Learned more
                                        about the Incas that I never knew!<br>Really enjoyed this tour!
                                    </p>

                                    <div class="flex flex-row justify-start items-center w-full mr-[24px]">
                                        <div class="flex flex-col gap-[8px] items-center w-full">
                                            <div class="flex flex-row items-center">
                                                <img src="../assets/images/img_icono_png_mesa_de.png"
                                                    class="w-[20px] h-[20px] rounded-[8px]" alt="response icon"
                                                    id="590:661" />
                                                <p class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                                    id="590:660">Respuesta</p>
                                            </div>
                                            <p class="text-[16px] font-normal leading-[27px] text-[#5c5c5c] font-['Nunito_Sans']"
                                                id="590:659">
                                                Thanks fo takinf our wonderful tour! He was so knowledgable and
                                                friendly. Learned more about the Incas that I never knew!<br>All the
                                                best
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-[1px] h-[236px] bg-[#ced1d2]" id="590:658"></div>
                            </div>

                            <div class="flex flex-col gap-[6px] justify-center items-end w-[12%]">
                                <p class="text-[14px] font-normal leading-[19px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:656">09 / December / 2025</p>
                                <p class="text-[14px] font-normal italic leading-[20px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:657">Viajó en familia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="bg-[#f5f5f5] rounded-[8px] p-[28px]" id="590_548_360_2578_1200_280">
                    <div class="flex flex-row justify-start items-start w-full">
                        <div class="flex flex-col gap-[6px] items-start w-[14%]">
                            <div class="flex flex-row items-center">
                                <img src="../assets/images/img_imagen_6_1.png" class="w-[20px] h-[14px] rounded-[6px]"
                                    alt="flag" id="590:688" />
                                <img src="../assets/images/img_group_134.png" class="w-[94px] h-[18px] ml-[8px]"
                                    alt="5 stars" id="590:682" />
                            </div>
                            <p class="text-[16px] font-normal leading-[21px] text-[#5c5c5c] font-['Nunito_Sans']"
                                id="590:681">Mario José Rodriguez</p>
                        </div>

                        <div class="flex flex-row justify-start items-start flex-1 px-[18px]">
                            <div class="flex flex-row justify-start items-center flex-1">
                                <div class="flex flex-col gap-[8px] items-start flex-1 ml-[18px]">
                                    <h4 class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']"
                                        id="713:24">Tour increible!</h4>
                                    <p class="text-[16px] font-normal leading-[27px] text-[#5c5c5c] font-['Nunito_Sans']"
                                        id="590:671">
                                        ¡Richard fue maravilloso! Era muy conocedor y amable. Aprendí mucho sobre
                                        los incas. ¡Desconocía por completo mi experiencia!<br>¡Disfruté mucho de
                                        este tour!
                                    </p>

                                    <div class="flex flex-row justify-start items-center w-full">
                                        <div class="flex flex-row items-center">
                                            <img src="../assets/images/img_tour_arquitecto.png"
                                                class="w-[100px] h-[100px] rounded-[8px]" alt="tour image"
                                                id="590:679" />
                                            <p class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] mt-[12px] -ml-[100px]"
                                                id="590:672">Tour increible!</p>
                                        </div>
                                        <img src="../assets/images/img_tour_arquitecto_100x100.png"
                                            class="w-[100px] h-[100px] rounded-[8px]" alt="tour image" id="590:680" />
                                        <img src="../assets/images/img_tour_arquitecto_1.png"
                                            class="w-[100px] h-[100px] rounded-[8px] ml-[6px]" alt="tour image"
                                            id="590:678" />
                                    </div>
                                </div>
                                <div class="w-[1px] h-[220px] bg-[#ced1d2]" id="590:675"></div>
                            </div>

                            <div class="flex flex-col gap-[6px] justify-center items-end w-[12%]">
                                <p class="text-[14px] font-normal leading-[19px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:673">09 / December / 2025</p>
                                <p class="text-[14px] font-normal italic leading-[20px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:674">Viajó en familia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="bg-[#f5f5f5] rounded-[8px] p-[26px]" id="719:389">
                    <div class="flex flex-row justify-start items-center w-full">
                        <div class="flex flex-row justify-center items-center w-[18%] mt-[4px]">
                            <div class="flex flex-col gap-[8px] items-start w-full">
                                <div class="flex flex-row items-center">
                                    <img src="../assets/images/img_imagen_5.png" class="w-[20px] h-[14px] rounded-[6px]"
                                        alt="flag" id="590:702" />
                                    <img src="../assets/images/img_group_134.png" class="w-[94px] h-[18px] ml-[8px]"
                                        alt="5 stars" id="590:705" />
                                </div>
                                <p class="text-[16px] font-normal leading-[21px] text-[#5c5c5c] font-['Nunito_Sans']"
                                    id="590:704">Francois Du Chateau</p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-[8px] items-start flex-1">
                            <h4 class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']"
                                id="590:691">Un randonneé exceptionelle !</h4>
                            <p class="text-[16px] font-normal leading-[27px] text-[#5c5c5c] font-['Nunito_Sans']"
                                id="590:690">
                                <span>José était formidable ! Il était très compétent et sympathique. J'ai appris
                                    plein de choses sur les Incas que j'ignorais totalement !<br>J'ai vraiment adoré
                                    cette visite !<br><br></span>
                                <span class="underline">Leer más</span>
                            </p>

                            <div class="flex flex-row justify-start items-center w-full">
                                <div class="flex flex-col gap-[10px] items-start w-full">
                                    <div class="flex flex-row items-center">
                                        <img src="../assets/images/img_tour_arquitecto.png"
                                            class="w-[100px] h-[100px] rounded-[8px]" alt="tour image" id="590:700" />
                                        <img src="../assets/images/img_tour_arquitecto_100x100.png"
                                            class="w-[100px] h-[100px] rounded-[8px] ml-[6px]" alt="tour image"
                                            id="590:701" />
                                        <img src="../assets/images/img_tour_arquitecto_1.png"
                                            class="w-[100px] h-[100px] rounded-[8px] ml-[6px]" alt="tour image"
                                            id="590:699" />
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="../assets/images/img_icono_png_mesa_de.png"
                                            class="w-[20px] h-[20px] rounded-[8px]" alt="response icon" id="590:703" />
                                        <p class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] ml-[8px]"
                                            id="590:693">Respuesta</p>
                                    </div>

                                    <p class="text-[16px] font-normal leading-[27px] text-[#5c5c5c] font-['Nunito_Sans']"
                                        id="590:692">
                                        <span>Nous nous excusons pour tous les désagréments. C'était merveilleux !
                                            Il était si compétent et sympathique. J'ai appris des choses sur les
                                            Incas que j'ignorais totalement !<br>J'ai vraiment adoré cette visite
                                            !<br><br></span>
                                        <span class="underline">Leer más</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row justify-end items-start w-[14%]">
                            <div class="w-[1px] h-[452px] bg-[#ced1d2]" id="590:696"></div>
                            <div class="flex flex-col gap-[6px] justify-center items-end w-[82%]">
                                <p class="text-[14px] font-normal leading-[19px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:694">09 / December / 2025</p>
                                <p class="text-[14px] font-normal italic leading-[20px] text-[#5c5c5c] font-['Nunito_Sans'] text-right"
                                    id="590:695">Viajó en familia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More Reviews Button -->
            <div class="flex flex-row justify-between items-start w-full mt-[80px] px-[88px]">
                <p class="text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] underline"
                    id="590:606">Ver más comentarios (5)</p>
            </div>
        </div>
    </section>

<!-- Formulario -->

 <!-- calendar -->
    <!-- <div class="bg-[#5c5c5c] rounded-[8px] p-[32px]">
        <div class="flex flex-col gap-[8px]">
            <button
                class="w-full bg-[#f5f5f5] rounded-[8px] px-[34px] py-[4px] text-[16px] font-bold leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']"
                id="590_548_1218_324_310_32">
                Marzo 2025
            </button>

            <div
                class="flex flex-row justify-center items-center gap-[24px] text-[16px] font-normal leading-[22px] text-[#fefefe] font-['Nunito_Sans']">
                <span id="595:1030">Lu</span>
                <span id="595:1031">Ma</span>
                <span id="595:1032">Mi</span>
                <span id="595:1033">Ju</span>
                <span id="595:1034">Vi</span>
                <span id="595:1035">Sa</span>
                <span id="595:1036">Do</span>
            </div>

            <div class="flex flex-col gap-[8px]">

                <div class="grid grid-cols-7 gap-[8px] justify-end items-end">
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#d9d9d9] font-['Nunito_Sans']"
                        id="590_548_1446_394_34_24">1</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#d9d9d9] font-['Nunito_Sans'] ml-[8px]"
                        id="590_548_1491_394_34_24">2</span>
                </div>


                <div class="grid grid-cols-7 gap-[8px] justify-center">
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#d9d9d9] font-['Nunito_Sans']">3</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#d9d9d9] font-['Nunito_Sans']">4</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#d9d9d9] font-['Nunito_Sans']">5</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#d9d9d9] font-['Nunito_Sans']">6</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#d9d9d9] font-['Nunito_Sans']">7</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#d9d9d9] font-['Nunito_Sans']">8</span>
                    <span
                        class="bg-[#1ab6b6] rounded-[8px] px-[12px] text-[16px] font-normal leading-[22px] text-[#f5f5f5] font-['Nunito_Sans']">9</span>
                </div>

                <div class="grid grid-cols-7 gap-[8px] justify-center">
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">10</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[8px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">11</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">12</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">13</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">14</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">15</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">16</span>
                </div>

                <div class="grid grid-cols-7 gap-[8px] justify-center">
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">17</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">18</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">19</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">20</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[8px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">21</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">22</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">23</span>
                </div>

                <div class="grid grid-cols-7 gap-[8px] justify-center">
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">24</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">25</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">26</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">27</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">28</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">29</span>
                    <span
                        class="bg-[#f5f5f5] rounded-[8px] px-[6px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans']">30</span>
                </div>

                <span
                    class="bg-[#f5f5f5] rounded-[8px] px-[8px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] self-start"
                    id="590_548_1218_554_34_24">31</span>
            </div>

            <input type="text" placeholder="Fecha seleccionada"
                class="w-full bg-[#f5f5f5e7] rounded-[8px] px-[20px] py-[8px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] mt-[16px]"
                id="590_548_1218_594_310_40" />

            <input type="text" placeholder="Personas"
                class="w-full bg-[#f5f5f5] rounded-[8px] px-[20px] py-[8px] text-[16px] font-normal leading-[22px] text-[#5c5c5c] font-['Nunito_Sans'] mt-[16px]"
                id="590_548_1218_650_310_40" />

            <button
                class="w-full bg-[#1ab6b6] rounded-[8px] px-[34px] py-[16px] text-[16px] font-bold leading-[20px] text-[#f5f5f5] font-['Inter'] mt-[24px] mb-[10px] hover:bg-[#159999] transition-colors">
                Reservar
            </button>
        </div>
    </div> -->