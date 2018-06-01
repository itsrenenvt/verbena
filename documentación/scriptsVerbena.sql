--
-- PostgreSQL database dump
--

-- Dumped from database version 10.1
-- Dumped by pg_dump version 10.1

-- Started on 2018-05-31 19:05:25 CDT

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 13241)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: -
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 3211 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: -
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_with_oids = false;

--
-- TOC entry 196 (class 1259 OID 17179)
-- Name: administrador; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE administrador (
    id_administrador integer NOT NULL,
    nombre character varying NOT NULL,
    ap_paterno character varying NOT NULL,
    ap_materno character varying,
    usuario character varying NOT NULL,
    "contraseña" character varying NOT NULL,
    email character varying NOT NULL,
    telefono double precision,
    direccion character varying
);


--
-- TOC entry 197 (class 1259 OID 17185)
-- Name: caja; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE caja (
    id_caja integer NOT NULL,
    tipo character varying NOT NULL,
    categoria character varying NOT NULL,
    cant_obras integer NOT NULL,
    descripcion character varying NOT NULL,
    paqueteria character varying NOT NULL,
    costo_envio integer NOT NULL,
    precio integer
);


--
-- TOC entry 198 (class 1259 OID 17191)
-- Name: carrito; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE carrito (
    id_obra integer NOT NULL,
    id_usuario integer NOT NULL
);


--
-- TOC entry 199 (class 1259 OID 17194)
-- Name: cartelera; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE cartelera (
    id_cartelera integer NOT NULL,
    nombre character varying NOT NULL,
    semana date NOT NULL,
    autor character varying NOT NULL,
    num_eventos integer NOT NULL,
    fecha_inicio date NOT NULL,
    fecha_fin date
);


--
-- TOC entry 200 (class 1259 OID 17200)
-- Name: colaborador; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE colaborador (
    id_colaborador integer NOT NULL,
    nombre character varying NOT NULL,
    ap_paterno character varying NOT NULL,
    ap_materno character varying,
    usuario character varying NOT NULL,
    "contraseña" character varying NOT NULL,
    email character varying NOT NULL,
    telefono character varying,
    direccion character varying
);


--
-- TOC entry 201 (class 1259 OID 17206)
-- Name: evento; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE evento (
    id_evento integer NOT NULL,
    nombre character varying NOT NULL,
    direccion character varying NOT NULL,
    fecha date NOT NULL,
    hora_inicio time(6) without time zone,
    hora_fin time(6) without time zone,
    organizador character varying NOT NULL,
    clasificacion character varying NOT NULL,
    categoria character varying NOT NULL,
    descripcion character varying NOT NULL
);


--
-- TOC entry 202 (class 1259 OID 17212)
-- Name: galeria; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE galeria (
    id_imagen integer NOT NULL,
    html_instagram character varying NOT NULL
);


--
-- TOC entry 203 (class 1259 OID 17218)
-- Name: newsletter; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE newsletter (
    id_newsletter integer NOT NULL,
    email character varying NOT NULL
);


--
-- TOC entry 204 (class 1259 OID 17224)
-- Name: obra; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE obra (
    id_obra integer NOT NULL,
    nombre character varying NOT NULL,
    artista character varying NOT NULL,
    categoria character varying NOT NULL,
    descripcion character varying NOT NULL,
    precio integer,
    imagen character varying
);


--
-- TOC entry 205 (class 1259 OID 17230)
-- Name: ordenes; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE ordenes (
    id_orden integer NOT NULL,
    id_usuario integer NOT NULL,
    fecha date NOT NULL,
    hora_venta time without time zone NOT NULL,
    status character varying NOT NULL,
    id_obra integer NOT NULL
);


--
-- TOC entry 206 (class 1259 OID 17236)
-- Name: reseña; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE "reseña" (
    "id_reseña" integer NOT NULL,
    titulo character varying NOT NULL,
    autor character varying NOT NULL,
    fecha_pub date NOT NULL,
    hora time without time zone,
    descripcion character varying NOT NULL
);


--
-- TOC entry 207 (class 1259 OID 17242)
-- Name: ruta; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE ruta (
    id_ruta integer NOT NULL,
    nombre character varying NOT NULL,
    calle character varying NOT NULL,
    cp integer NOT NULL,
    colonia character varying NOT NULL,
    ciudad character varying NOT NULL,
    num_ext character varying,
    num_int character varying,
    coordenadas character varying
);


--
-- TOC entry 208 (class 1259 OID 17248)
-- Name: usuario; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE usuario (
    id_usuario double precision NOT NULL,
    usuario character varying NOT NULL,
    "contraseña" character varying NOT NULL,
    nombre character varying NOT NULL,
    ap_paterno character varying NOT NULL,
    ap_materno character varying,
    email character varying NOT NULL,
    direccion character varying,
    telefono character varying NOT NULL
);


--
-- TOC entry 3192 (class 0 OID 17179)
-- Dependencies: 196
-- Data for Name: administrador; Type: TABLE DATA; Schema: public; Owner: -
--

COPY administrador (id_administrador, nombre, ap_paterno, ap_materno, usuario, "contraseña", email, telefono, direccion) FROM stdin;
1002801	José	Rivadeneira	Manrriquez	joriman	admin123	joriman@laweb.com	2721073535	Oriente 6 456
1002802	Luis	Rivas	Durán	luisrivas	Equipo24	luisrivasd@gmail.com	2721073524	Oriente 8 624
1002803	René	Navarrete	Tenco	ReneTenco	Equipo24	renybaby@gmail.com	2721419624	Oriente 12 624
\.


--
-- TOC entry 3193 (class 0 OID 17185)
-- Dependencies: 197
-- Data for Name: caja; Type: TABLE DATA; Schema: public; Owner: -
--

COPY caja (id_caja, tipo, categoria, cant_obras, descripcion, paqueteria, costo_envio, precio) FROM stdin;
54901	Mensual	Dulces	25	Caja grande de dulces...	FedEx	120	199
54900	Mensual	Dulces	12	Pequeña caja mensual de dulces...	FedEx	120	99
55900	Mensual	Obras	5	Pequeña muestra de obras textiles...	FedEx	120	549
54902	Trimestral	Dulces	40	Caja Enorme de dulces...	FedEx	120	349
55901	Trimestral	Obras	10	Caja con artesanias de la zona del itsmo...	FedEx	120	1299
\.


--
-- TOC entry 3194 (class 0 OID 17191)
-- Dependencies: 198
-- Data for Name: carrito; Type: TABLE DATA; Schema: public; Owner: -
--

COPY carrito (id_obra, id_usuario) FROM stdin;
17011204	15011200
17011202	15011200
\.


--
-- TOC entry 3195 (class 0 OID 17194)
-- Dependencies: 199
-- Data for Name: cartelera; Type: TABLE DATA; Schema: public; Owner: -
--

COPY cartelera (id_cartelera, nombre, semana, autor, num_eventos, fecha_inicio, fecha_fin) FROM stdin;
1200	Cartelera Día de Muertos	2017-10-27	Rivas	25	2017-10-27	2017-11-03
1201	Cartelera Semana Santa	2018-03-26	Zaira	35	2018-03-26	2018-04-01
1202	Cartelera Semanal	2018-04-20	René	15	2018-04-20	2018-04-27
1203	Cartelera Semanal	2018-05-04	Rivas	20	2018-05-04	2018-05-11
\.


--
-- TOC entry 3196 (class 0 OID 17200)
-- Dependencies: 200
-- Data for Name: colaborador; Type: TABLE DATA; Schema: public; Owner: -
--

COPY colaborador (id_colaborador, nombre, ap_paterno, ap_materno, usuario, "contraseña", email, telefono, direccion) FROM stdin;
14011201	Ryan	Thomas	Gosling	handsomeFace	1234	GSlinger@gmail.com	6562875357	Los Angeles, California
14011200	Emily	Jean	Stone	brokenDreams	1234	EmmStone@gmail.com	2721198976	Hollywood, USA
14011202	Zaira	Cerecedo	Carrera	abejaMiope	1234	ZayItzC@gmail.com	2723456712	Orizaba. Ver
14011205	René	Navarrete	Tenco	itsrenenvt	Rhenius9426	brnvtrene@gmail.com	2781043252	Cauville Lote 2, Agricola Librado Rivera
14011204	Gerardo	Hernández	Rodríguez	ghero	ghero123	philippe@rusia.com	6562567334	Moscow, Rusia
14011203	Eusebio Alejandro	Bolaños	Ruiz	bolaru	bolaru246	itsmiguel@gmail.com	018004567342	New York, NY
\.


--
-- TOC entry 3197 (class 0 OID 17206)
-- Dependencies: 201
-- Data for Name: evento; Type: TABLE DATA; Schema: public; Owner: -
--

COPY evento (id_evento, nombre, direccion, fecha, hora_inicio, hora_fin, organizador, clasificacion, categoria, descripcion) FROM stdin;
16011200	Inauguración Piccaso	Oriente 4 s/n	2018-05-12	18:00:00	20:30:00	MAEV	Público gral.	Arte	Lorem ipsum
16011201	Presentación "La Castañeda" 	Oriente 31 765	2018-03-25	19:00:00	22:00:00	Casa Baltazar	Público gral.	Literatura	Lorem ipsum
16011202	Casa por la ventana	Sur 7 243	2018-02-15	20:00:00	22:00:00	Casa 243	Público gral.	Performance	Lorem ipsum
16011203	Apertura Ex-Convento	Oriente 6 s/n	2018-01-19	15:00:00	19:00:00	Ayto. Orizaba	Público gral.	Monumento Historico	Lorem ipsum
16011205	Presentación 	Oriente 31 s/n	2018-05-02	18:00:00	19:00:00	Fería del Libro	Públco gral.	Literatura	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011207	Escribir es Jugar	Calle Colón 692	2018-05-04	10:00:00	12:00:00	Nicté Toxqui	Niños	Literatura	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011206	Acercamientos a la Cuesta de Necoxtla	Parque de Ciudad Mendoza	2018-05-03	10:00:00	18:00:00	Casa 243	Público gral.	Cultural	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011204	Evento Prueba	Orizaba, Ver	2018-05-23	01:00:00	02:00:00	René Navarrete Tenco	Público en general	Literatura	Esto es una prueba para la consulta de la base de datos.
160112010	Festival del Papalote	Monte Blanco, Ver	2018-05-07	09:00:00	22:00:00	Festival del Papalota AC	Público gral.	Cultural	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011214	Quiero Bazar: 5ta edición	Plaza Bicentenario	2018-05-11	12:00:00	20:00:00	Quiero Bazar AC	Público gral.	Bazar	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011208	Festival Batalla de Puebla	Oriente 6 s/n	2018-05-05	17:00:00	20:00:00	Ayto. Orizaba	Público gral.	Feriado Nacional	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011212	El Maíz en Tiempos de Guerra	Avenida 12 984	2018-05-09	12:00:00	14:00:00	Centro Cultural Imperial	Público gral.	Conferencia	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011213	Contra El Silencio Todas Las Voces	Avenida 8 de Marzo	2018-05-10	18:00:00	20:00:00	Videoteca Bengala	Público gral.	Proyección	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011209	Nitlakowateh	Sur 7 94	2018-05-06	12:00:00	19:00:00	Cafenatlan	Público gral.	Bazar	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
16011211	Taller de Cración de Fanzines	Calle 6 417	2018-05-08	16:00:00	20:00:00	Centro Cultural Solar	Público gral.	Artistico	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
160112011	Antrax y TheSoundOfRivas	Poniente 7	2018-05-04	18:00:00	20:00:00	YouTube	Jovenes	Performance	No vayan, esto solo daña la mente y se roba su dinero.
160112012	Market Market - Mercado Creativo	Av. 4 #1 Córdoba,Ver	2018-05-27	12:00:00	21:00:00	Market Market - Mercado Creativo	Público en general	Cultural	Bazar de productos creativos.
\.


--
-- TOC entry 3198 (class 0 OID 17212)
-- Dependencies: 202
-- Data for Name: galeria; Type: TABLE DATA; Schema: public; Owner: -
--

COPY galeria (id_imagen, html_instagram) FROM stdin;
12011211	https://instagram.fpbc2-2.fna.fbcdn.net/vp/bfa5b07fb3814a78d4ac0451d277c252/5B8C4A4A/t51.2885-15/e35/14726175_188120688262140_7093458232479318016_n.jpg?_nc_eui2=AeE4c6zf0xOo7U-jg89n-HIB0FUDLMf01N11YvqMq0zuCAde8MArTvWmzTk_175W-VP7E4qNGNATVQM0SyHEV1BZduD6Ou4fV9KF4EunUMRGYg
12011200	https://instagram.fpbc2-2.fna.fbcdn.net/vp/836f98a740c2563743bdac0edd546f0b/5BA1A09E/t51.2885-15/e35/13392869_1628713024112802_1619165795_n.jpg?_nc_eui2=AeG-SmbPEyI3lfkkO0Ob5D4zri17vJkMKXw__w92qQUqzBM9Ri_bk7BbX2n61ucfW6K5hai26vjSO3MURC_EXnZdYf-SuPXRqC3O2PVSUMf-Kg
12011201	https://instagram.fpbc2-2.fna.fbcdn.net/vp/622b033c95797c12321af9e7f7ef86ca/5B8E5FAB/t51.2885-15/e35/13395050_556704864531762_521610337_n.jpg?_nc_eui2=AeHYvZDYWUVC7tLH7eaAGJ3gkmnYrSE3hB1zdLDAaH8Xj7um_LewaNmm3cQ1sNqV7n57FJ-cH5ufm5quA4k4KJ1QEkLD0a8S0P2ILYfsOH0VTA
12011202	https://instagram.fpbc2-2.fna.fbcdn.net/vp/5365c84a4c3fc9509060e1bda3437e57/5B96FEC7/t51.2885-15/e35/13414145_1592009434463276_376238713_n.jpg?_nc_eui2=AeEjDPpvd9niib99CgbEnTvr_apjaFuPffm5YFuOOmN7VLIGvfr4QIzUc3h7eZmb4LFVYmSMsUHQZJcJfYRVD_0FzKJ6xwXryPiJPKgGUK3n1Q
12011203	https://instagram.fpbc2-2.fna.fbcdn.net/vp/be224dbceff301fe051ffec7053815e3/5B929E58/t51.2885-15/e35/13395074_1697989740462780_345766596_n.jpg?_nc_eui2=AeF77XIaUMhO98CZy3vG63XFPejJN-jmlaNCwcKS31ueY38gKMCipTlvB699XPKPInwB3ZWDrFDq62z_b7vmc9V3x5SzR7gj53eKrSa9nZYFlw
12011204	https://instagram.fpbc2-2.fna.fbcdn.net/vp/85e93796f82011ee45a4b4375078c7fb/5B95DA25/t51.2885-15/e35/13108974_295266307482957_1636518346_n.jpg?_nc_eui2=AeFdA_4DkD5S4mL4WXarfGE90wFZjMhUW3_QYZQgkzom5VCxb36FbVJElK0s8sFDnaje5NNmy4JuW6reGSgMnuerLLbpkdpXiiv7WgaKmvBCxQ
12011205	https://instagram.fpbc2-2.fna.fbcdn.net/vp/b21fd11236f242a5b70c9f06d7eb5b45/5B8867CA/t51.2885-15/e35/13437231_668383633310920_822695106_n.jpg?_nc_eui2=AeFOX4v9am8DXa28_RqC_6HGJ0ZTtIPW6UrW1ECCduA6HBf68b5HACGsHtua9H77pY0CQ6ttR5FbL2PmnpPhrBLpVT8UBDUxNWoPqL3zqUPprg
12011206	https://instagram.fpbc2-2.fna.fbcdn.net/vp/75241daddb2d991884d547ece7eb21d6/5B95993E/t51.2885-15/e35/14156236_926722560795927_1964163944_n.jpg?_nc_eui2=AeGGqp7TrKOfqVfLd1bN80ZMFwtzFPAnk6Mhxjg4hJcFhrT1sXVSVwdRUJuOn6sPl90T1p9_fvhk4-q4tsegMx3vwU3mPnG36_WNpN6bOlXpnw
12011207	https://instagram.fpbc2-2.fna.fbcdn.net/vp/53553b2ff1eca92ec3da719e02a4eddd/5B8387EF/t51.2885-15/e35/14063247_324040121319591_1398823239_n.jpg?_nc_eui2=AeGuyaFi8Sj04UOKnVng1pxDeM_l41AMnqPGi-H2V9GVI8XeHgEIZHPSvdfQNdU2J6_ELNpihRY-o_8sH_AKdeI9i5gv9qfzyTMuDLx_NGnglw
12011208	https://instagram.fpbc2-2.fna.fbcdn.net/vp/18a961a25e7639ebb65c0647524fb2da/5B80A67A/t51.2885-15/e35/14374369_154565671660431_1200991591_n.jpg?_nc_eui2=AeE5tttL3KfWK9JFr93lgT6ja-vTd2FcHrGPGAB1cXxAI5IbZ-k_qsaaumq75Zj93xAfDNB51u0FwjdUqcNCi6R45yhaq3_EEkf5pr1Bf0rC9w
12011209	https://instagram.fpbc2-2.fna.fbcdn.net/vp/928bec53a8743d756b969731bb190c2e/5B90D283/t51.2885-15/e35/14712238_170746790051168_2709502967907614720_n.jpg?_nc_eui2=AeFPWsKZdjU_7w13ZrTW5ekcovtR93fVIo-zzBeMZPG3yWqzygmpJVhTd-DxwmwNuL4o9465Ws6KIkGoRGjRMPfePVDSGewsvU4Amsyj0hTORw
12011210	https://instagram.fpbc2-2.fna.fbcdn.net/vp/2ea1a7df673a657e9ba919a2c478a824/5B96C91F/t51.2885-15/e35/14718386_1250122648385084_2873845128370323456_n.jpg?_nc_eui2=AeHnTWSlNh1unQHIwlE7KsBMnjW4mVpsAFeLhXM8IXu0CuY92uvlXFq9n5V6TUNeNl1wA2Z4cfaOXOt2GPpR1nEQ6slwKpbhHRNjdFsd_hQdZw
12011212	https://instagram.fpbc2-2.fna.fbcdn.net/vp/b5f1fa498fd51bc49576936301c3a114/5BA12702/t51.2885-15/e35/15258833_981005948671492_3012560936964718592_n.jpg?_nc_eui2=AeHmE4Vixy3i7UMmH8NjVnmtgA2JP03wl-2URmQ_GUjlXQfvXJ-6EdWY0dbuo8OM2jBbcMfg3-eSUJrlRmRcyw1_4aNz58PCMk7WM5NHnYcXlg
12011213	https://instagram.fpbc2-2.fna.fbcdn.net/vp/b19fa4dbe5357886576c64af18c79eca/5B940F1D/t51.2885-15/e35/15276701_733094443535745_5401300126410997760_n.jpg?_nc_eui2=AeF12wpn-ZA40biHOQjAZ8hKU1UTGKoSlRRYC0X5zUL4IZwUXwHeUYXRDU5_QZRa5zjUl1Pnwb3z08QYDt3BNV8H_9qF4rX3nuLU9ctSRoZQrQ
12011214	https://instagram.fpbc2-2.fna.fbcdn.net/vp/69c02499bf7353f8f241892bf81f00cf/5B8A4C9E/t51.2885-15/e35/18645765_406088159791664_7288226156015255552_n.jpg?_nc_eui2=AeG9-1-cBVnRWxZl9i7Qay3GRjvyHhuDfrsl8r-gQ3og4ImTtkd59dwR1vLQQyb73CHbpEJMtLrujzOGoYeT6s5wWzd_hFbqERdoMI8PH00QBg
12011215	https://instagram.fpbc2-2.fna.fbcdn.net/vp/d4c9696986e2c6ef3f6ae1be42a143ed/5B80529A/t51.2885-15/e35/17334095_820922728056322_7640280832812253184_n.jpg?_nc_eui2=AeENOWAOeATY_28KKM4bZ2FCyCdG2q-QRwdIhy8fIAggsXJecgJHJ6uLhLEyKIIO0IlNi7854lRbNXt4l0YjZl9jRzIxyNJQbba3ee8zYTtCZg
12011216	https://instagram.fpbc2-2.fna.fbcdn.net/vp/f72570e7f7bc54b9f8d5f27f56f712af/5B83910E/t51.2885-15/e35/13320029_1023838197704141_1129587242_n.jpg?_nc_eui2=AeEivcYnG8J2zuhtZBDLuIGPYyInphkuOtc-DyRKCyMiuU_t5u38QSzVhB9yllBmb7JlMyVWqQPvRHoe3hVXzKo0S4pO5T6CByqB8JZGcYIzAA
12011217	https://instagram.fpbc2-2.fna.fbcdn.net/vp/fb787fd1162e39b02c93b0a8ca14e4ea/5B81F942/t51.2885-15/e35/13741282_141981372908092_118206025_n.jpg?_nc_eui2=AeHWg2MMbso7D8jddYkyIZ69i-L5XWsmSa6iS15LlDm1RSqtyofrCCzXaVP66LbZ4xJEpUGigeGIiyDHdxfw1Rboadf9du1B0-_uKNWK7IX7uQ
12011218	https://instagram.fpbc2-2.fna.fbcdn.net/vp/60037d616af4606c9e747eef6e0b33fd/5B7FBB6A/t51.2885-15/e35/14714481_314880545563262_4253254887153860608_n.jpg?_nc_eui2=AeHCPTg_TkvcGEXDln_8MbC0UTd3DVY0_jMFJxmSWJxz43bNLw15m7oZMOwY4ihVK3g4xvdvbkvPeyIwYzjip0C_15IfGaq9eVivtjJHGIDOdw
12011219	https://instagram.fpbc2-2.fna.fbcdn.net/vp/d0ff72592c997cd591e8cd125ca07529/5B95DB4B/t51.2885-15/e35/28751063_419633345151027_1588156224614957056_n.jpg?_nc_eui2=AeE_db9MGM0QGMuv429zTM34lOd4HqfmnZ0mFJuQuIAT8ifNWIyOCoVdIBISRYIoF8bzzaQB1w5w0LZa-qDyUyG-CLuKsnSQCpj5iD6Ctln63w
12011220	https://instagram.fpbc2-2.fna.fbcdn.net/vp/6f592127193baebd4457aad2e9249175/5B91144B/t51.2885-15/e35/25009021_1582265118528378_5746580145133584384_n.jpg?_nc_eui2=AeEiNn98YE7ap--mMhOhNEXAxBxcXBOA1ulrn-ace7ZF6z-vCpXEl8_LV9uhsbQJUcOSOQc-O1dgpydQRoIhA1ETVd100W4Lpf3kQ8119gcjSw
\.


--
-- TOC entry 3199 (class 0 OID 17218)
-- Dependencies: 203
-- Data for Name: newsletter; Type: TABLE DATA; Schema: public; Owner: -
--

COPY newsletter (id_newsletter, email) FROM stdin;
10011200	verbenadelabuena@gmail.com
10011201	brnvtrene@gmail.com
\.


--
-- TOC entry 3200 (class 0 OID 17224)
-- Dependencies: 204
-- Data for Name: obra; Type: TABLE DATA; Schema: public; Owner: -
--

COPY obra (id_obra, nombre, artista, categoria, descripcion, precio, imagen) FROM stdin;
17011200	Postales	Zaira I Cerecedo	Decoración	Postales, para la temporada de fiestas.	30	postales.jpg
17011201	Liebre ceramica	Zaira I Cerecedo	Decoración		30	IMG_6880.jpg
17011202	Corazón ceramica	Zaira I Cerecedo	Decoración		30	IMG_6875.jpg
17011203	Luchador	Zaira I Cerecedo	Decoración		30	IMG_6867.jpg
17011204	Jarrón Ceramica	Zaira I Cerecedo	Decoración		30	IMG_6883.jpg
17011205	Burrito de listones	Zaira I Cerecedo	Decoración		30	IMG_6884.jpg
17011206	Molcajete	Zaira I Cerecedo	Accesorios		23	IMG_6885.jpg
17011207	Lápiz	Zaira I Cerecedo	Bisuteria		30	IMG_6892.jpg
\.


--
-- TOC entry 3201 (class 0 OID 17230)
-- Dependencies: 205
-- Data for Name: ordenes; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ordenes (id_orden, id_usuario, fecha, hora_venta, status, id_obra) FROM stdin;
18013401	1002803	2018-05-31	02:05:04	pendiente	1002801
18013400	1002801	2018-05-30	18:00:00	pendiente	1002801
18013402	15011200	2018-05-31	02:08:09	pendiente	15011200
18013406	15011200	2018-05-31	06:39:28	Entregada	17011202
18013409	15011200	2018-05-31	07:26:25	Entregada	17011202
18013403	1002803	2018-05-31	04:50:17	Entregada	17011203
18013407	15011200	2018-05-31	07:08:53	Entregada	17011203
18013408	15011200	2018-05-31	07:26:20	Entregada	17011203
18013410	1002803	2018-05-31	07:48:47	pendiente	17011207
18013411	15011200	2018-05-31	07:50:24	Confirmada	17011205
18013404	1002803	2018-05-31	04:50:36	pendiente	17011204
18013405	1002803	2018-05-31	06:24:01	Confirmada	17011206
\.


--
-- TOC entry 3202 (class 0 OID 17236)
-- Dependencies: 206
-- Data for Name: reseña; Type: TABLE DATA; Schema: public; Owner: -
--

COPY "reseña" ("id_reseña", titulo, autor, fecha_pub, hora, descripcion) FROM stdin;
13011205	El aire de las tumbas	Hernández Rodríguez Gerardo	2018-05-24	00:29:44	<div>Mis abuelos, tanto el materno como el paterno, descansan en un pequeño espacio debajo de la tierra. Uno de ellos decidió reposar en un pequeño cerro, a cierta distancia de Xalapa. El aire es frío todo el año y, desde su tumba, se pueden apreciar a todos los camioneros que suben y bajan la carretera. De alguna manera, su trabajo y su gusto por esas tierras frías y altas se unieron para darle un poco de descanso. Por su parte, mi abuelo materno yace en Río Blanco, a unos cuantos minutos de Orizaba. En ese panteón –que se encuentra al pasar por unas vías de tren infinitas– se acumulan tumbas y almas que cubren una buena parte de la historia del lugar. La selección del sitio no fue complicada: mi abuelo, al que poco conocí en vida, fue obrero textil y panadero en ese pequeño pueblo que defendió sus derechos con una huelga. De ello queda constancia en la fachada de la antigua fábrica. Su esposa, mi abuela, quien falleció muchos años atrás (mi madre era una niña), había sido sepultada en ese cementerio. Ahí, la historia de mi familia materna se conjuga: están los abuelos, bisabuelos, una tía que murió cuando apenas era una niña y que causó un duelo eterno en sus padres. Todos descansan, de alguna manera, ante la tranquilidad de los cerros cuyo color verde me parece, desde que era niño, un color eterno.</div><div><br></div><div>El ritual se repitió durante mucho tiempo, cuando la muerte todavía no hacía acto de presencia común en la familia. Mis padres, mi hermano y yo nos subíamos al carro, por la mañana, cada primero de noviembre: en aquel entonces eran cerca de tres a cuatro horas de camino hasta llegar a Orizaba, un poco hastiados por la carretera, por la desmañanada. Al llegar, el paisaje me provocaba la sensación de ser un extranjero. Alguna vez caminé por el centro a un lado de mi madre; otras veces, recorrí calles y casas de amigos de mis padres. Primero visitábamos Bosques del recuerdo: un panteón cosmopolita, limpio, perfecto. Ahí mi padre se quedaba en silencio, rememorando a un viejo maestro y amigo suyo. Después, partir. Río Blanco, las vías del tren, el olor a garnachas con tripas, a dulces, a flores recién cortadas. Por lo general el frío calaba y debíamos llevar un suéter o una chamarra no muy gruesa, aunque los últimos años el sol dominaba todo el día. Entrar al panteón era encontrarse con un lugar distinto al que siempre imaginaba: había música, ruido, pláticas, risas. La gente</div><div>iba y venía, les enseñaban a sus hijos tal o cual dato familiar. Nosotros pasábamos guiados por mi madre, por sus recuerdos, a la tumba de mis abuelos maternos. Ahí depositábamos las flores, limpiábamos, le dejábamos espacio a ella. Nosotros, los extranjeros, debíamos aceptar que esa tierra era de ella y de sus padres. Después, íbamos a la laguna de Nogales y comíamos mientras la gente nadaba, o simplemente deambulaba.</div><div><br></div><div>La muerte me trae nostalgia: el aire siempre es frío, el sol a veces ataca en un cielo despejado. Incluso parece una fiesta el Día de Muertos. En casa hay pan, tamales, refresco, cigarros, flores y olores suaves. En el panteón, flores bonitas, veladoras. Pero hay un olor indistinguible: el olor de la nostalgia, de sentir que incluso si se han ido hace un par de años o hace cincuenta, nuestros recuerdos de esas personas los mantienen vivos en una pequeña parcela de tierra y una construcción de cemento. Lo malo es que sólo dura un día. Una jornada entera para volver a revivir el recuerdo, para tejer lazos que tal vez la memoria comienza a olvidar lentamente: reír como reiríamos con esa persona, aunque sepamos que, al acabar la jornada, simplemente se irá de nuevo. No podemos retener a nuestros muertos: no podemos mantener a quienes han creado nuestro pasado.</div><div><br></div><div>Para la medianoche, ya estábamos en Xalapa, listos para continuar con nuestras vidas. Esa costumbre se perdió hace años: ahora hay más gente que visitar y menos dinero para hacerlo. Río Blanco queda más lejos en autobús que Acajete. El año pasado no pudimos ir a ningún lado. Me la pasé entre puestos con dulces y calaveritas de chocolate. Compré una calaca. Volví a casa y pusimos un pequeño altar, con aquello que recordábamos de otras personas. Un tequila en la noche en honor a nuestros difuntos. Fuimos a dormir en paz.</div><div><br></div><div>Mi abuelo murió un veintisiete de diciembre. De mi otro abuelo, tristemente, no recuerdo la fecha. Ambos me quisieron y de ambos guardo recuerdos felices, borrosos, idílicos. Aunque sus tumbas marquen sus diferentes vidas, ambas me recuerdan que nací entre cerros, entre aire frío, entre pinos inmensos. Tal vez este año vuelva a ambos lugares y dedique un tiempo a estar con ellos.</div>
13011206	El gallo y el quinqué	Bolaños Ruiz Eusebio Alejandro	2018-05-24	00:34:21	<div>Aunque se acercaba el amanecer, una profunda neblina helaba las paredes de madera de cada una de las casas del pueblo. El olor a madera mojada se encontraba impregnado en el ambiente y las mujeres ya hacían fila en el molino para moler el grano y preparar las tortillas. Aunque el año había sido malo por la roya, los productos de la milpa habían ayudado un poco al reducido estómago de los campesinos.</div><div>Era un típico tres de noviembre, las flores amarillas se encontraban dispersas por todos lados de manera desordenada. Lo que un día anterior había sido un camino para que las ánimas regresaran al mundo de los vivos, ahora simplemente era un recuerdo de que ese camino solo es permanente cuando se recurre a él en la memoria.</div><div>Siendo un día tan común, nadie en el pueblo podía escuchar el ruido que rompía el silencio de la cotidianeidad del lugar. Extraños sonidos provenían de la vieja hacienda abandonada ya varios años atrás. La madera del piso, que alguna vez se había encontrado perfectamente encerada, hoy se encontraba carcomida por termitas.</div><div>Los pasos de un hombre hacían crujir las delicadas tablas del piso. El hombre, como si hubiese despertado de un terrible y largo sueño, se levantó tembloroso y con cuidado comenzó a caminar. Si bien, Topiltzin no recordaba nada del día anterior, se dirigió a su casa, cuidando que nadie lo viera pasar. El crimen que había cometido lo mantenía alejado de la gente, la cual comenzaría a apedrearlo si llegaran a verlo.</div><div>Después de unos minutos caminando entre la niebla, se introdujo a su casa, llamo a su padre, el cual era el único que lo quería en este mundo. No obstante, solo encontró un cenicero lleno y varias botellas de aguardiente tiradas en el piso. Ni siquiera el gallo se había quedado. La vida de Topiltzin era muy pobre, ni él ni su padre podían trabajar en el campo y mucho menos pensar en vender algún producto ¿Quién le compraría algo a una familia así?</div><div>Topiltzin encendió el fogón y comenzó a calentar sus manos. De repente reparó en que había una carta escrita en un amarillento papel. La letra infantil que redactaba el texto era de su</div><div>padre. Encendió el ultimo cigarrillo de la caja y con la misma dificultad que tuvo su padre para escribirla, comenzó a leer.</div><div>Topiltzin:</div><div>Cuando leas esta carta, yo ya me habré ido. Te pido por favor que utilices esta nueva oportunidad de manera provechosa, todos tus pecados han sido perdonados. No obstante, te recomiendo tomar el poco dinero que tenía escondido debajo del ropero y que te vayas del pueblo, la gente no va a entender por qué estas de nuevo entre ellos.</div><div>Nunca espere que me hicieras tan desdichado Topiltzin; desde que eras un niño fuiste cruel con quien podías serlo. Cuando tu madre murió pensé que podría hacerte un hombre de bien, pero parece que me equivoque. ¿Qué fue lo que hice mal hijo? Pienso que eso no importa ya.</div><div>Te debes estar preguntando qué ha pasado: moriste, Topiltzin. O mejor dicho: te dieron muerte. Hace unos meses volvías a casa cuando los hermanos de la mujer que mataste hicieron justicia por mano propia. Te enterré en la cripta y pensé en dejar morir el pasado contigo, pero los sueños que tenía no me dejaban vivir.</div><div>Soñaba a tu madre, lloraba por el destino que tuviste después de la muerte. Sabía que esos sueños no me iban a dejar vivir. He cambiado mi destino por el tuyo, esperando que no nos volvamos a ver. Le has causado tanto daño a la familia, que hasta nuestro único gallo ha tenido que pagar por ti.</div><div>He hecho un pacto, encendí el quinqué, amarré al gallo y los llevé a la cripta en donde yacías. Pasé la noche en vela, esperando entre las heladas paredes del lugar a que él se presentará ante mí. Al final le he regalado el gallo y el quinqué para que me permitiera cambiar tu lugar conmigo.</div><div>Espero que corrijas tu vida, y que tengas la piedad de enterrar mi cuerpo que en este momento debe yacer en la cripta donde realice el pacto. Por favor hijo, comienza una nueva vida, recuérdame, quizás algún día encuentre la paz.</div><div>Cuautli.</div><div>Topiltzin miró la carta unos instantes y la dobló, tomó el dinero escondido, terminó su cigarrillo, tomó la pala y confundido se dirigió a la cripta abrigado por la extraña sensación de volver a vivir.</div><div><br></div><div><span style="font-weight: bold;">Nota del autor:</span> Durante el día de muertos, recordamos a nuestros difuntos y en algunos casos nos duelen sus pecados. ¿Qué daría un padre por obtener el perdón para sus hijos? ¿podrías dormir sabiendo que tu hijo sufre el castigo eterno? En este corto relato de fantasía, le regalo una última oportunidad a Topiltzin, a sabiendas de lo que ha costado</div>
13011204	Curando el Jazz	Rivadeneira Manrriquez José	2018-05-23	21:01:33	<div><span style="font-weight: bold;">A propósito de Triada:</span></div><div><br>Arte Con Swing, recién inaugurada en El Centro Cultural Casa Baltazar&nbsp;dentro del marco del 3er Festival Internacional de Jazz en Cordoba, donde se presentan piezas&nbsp;de Steph Yates, Janet Morton, Ambera Wellmann, y Juliane Foronda. hablamos con el curador&nbsp;de video Scott McGovern.&nbsp;Scott es un curador, artista, videógrafo y educador. Estudió video en el Ontario College of Art&nbsp;and Design. Desde el 2005 ha sido el director de programación en Ed Video Media Arts Centre,&nbsp;un centro dirigido por artistas en Guelph, Canadá, donde ha hecho posibles mas de 100&nbsp;exhibiciones, eventos y conciertos. Ha curado exposiciones en centros dirigidos por artistas,&nbsp;museos y ferias de arte en Canadá, México, Suecia, Paris y Grecia.</div><div><br></div><div><span style="font-weight: bold;">La sombrilla del arte.</span></div><div><span style="font-weight: bold;"><br></span></div><div>McGovern reconoce que hablar de artes visuales es hablar de un término complejo y amplio.</div><div><br></div><div style="text-align: center; "><span style="font-style: italic; font-weight: bold; color: rgb(102, 102, 102);">“Pienso en ello como si fuese una sombrilla gigante que tiene que cubrir muchas cosas&nbsp;diferentes, todo lo que la gente hace es creativo. Todo puede ir debajo de esta sombrilla de las&nbsp;artes visuales.”</span></div><div style="text-align: center; "><span style="font-style: italic; font-weight: bold; color: rgb(102, 102, 102);"><br></span></div><div>Bajo la vieja premisa de Oscar Wilde que dicta que “definir es limitar”, Scott sabe que ponerle&nbsp;un nombre a lo que está debajo de esa sombrilla es difícil y que el proceso de etiquetar y sellar&nbsp;aísla, a veces, las cosas más llamativas.&nbsp;</div><div><br></div><div style="text-align: center; "><span style="font-style: italic; font-weight: bold; color: rgb(102, 102, 102);">“Las cosas mas interesantes están por lo general&nbsp;entre lo tradicional o intentando nuevas cosas.”</span></div><div style="text-align: center; "><span style="font-style: italic; font-weight: bold; color: rgb(102, 102, 102);"><br></span></div><div><span style="font-weight: bold;">Descubrir la obra, la tarea diaria.</span></div><div>En el juego que el curador canadiense arma con el abanico de posibilidades en sus manos,&nbsp;como en una partida de Póker, a través de la secuencia de imágenes hasta producir materiales&nbsp;audiovisuales responde a una premisa básica en la vida del artista: considera al video como un&nbsp;lenguaje internacional, algo a lo que cualquiera tiene una llave que abre la puerta a lo que&nbsp;busca expresar.</div><div><br></div><div style="text-align: center; "><span style="font-weight: bold; font-style: italic; color: rgb(102, 102, 102);">“Creo que el video es muy poderoso para que al gente pueda contar sus historias o&nbsp;comunicar”.</span></div><div style="text-align: center; "><span style="font-weight: bold; font-style: italic; color: rgb(102, 102, 102);"><br></span></div><div>Además, la presentación de cada una de las obras que han pasado por sus manos se cubre&nbsp;de misterio y magia con algo que él mismo describe como capas. Eventos que integran un&nbsp;todo pero que por separado revelan aspectos diferentes del material que termina de pulir con&nbsp;su experiencia.&nbsp;Los artistas jóvenes están en el primer plano de su enfoque. El curador tiene a certeza de que&nbsp;son ellos quienes intentan nuevas formas de expresarse, apoyándose a veces de la tecnología&nbsp;<span style="font-size: 1rem;">como soporte principal.</span></div><div><br></div><div><span style="font-weight: bold;">El mundo arriba de Estados Unidos Canadá, la rebanada de pan en la cima de un&nbsp;Sándwich.</span></div><div>Detrás de bambalinas, quizás opacado por la presencia del gigante Estados Unidos, está&nbsp;Canadá, el país que a Scott McGovern le gusta ver como la “rebanada de arriba del sándwich&nbsp;que se conforma con Estados Unidos y México”. Pero Canadá no es sólo eso. De acuerdo con&nbsp;McGovern, se trata de un semillero de talento.</div><div>A pesar de que alberga a una población pequeña en proporción a su tamaño, este país&nbsp;silencioso para la escena internacional tiene artistas emocionantes. Por ello, la misión de este&nbsp;“herrero del arte” es generar nuevas audiencias para que los artistas canadienses no tengan&nbsp;que abandonar su lugar de origen para poder ganarse la vida a través de sus creaciones, y con&nbsp;el tiempo, encontrar el éxito.</div><div><br></div><div><span style="font-weight: bold;">El paso por México.</span></div><div>El paso por tierra azteca de Scott ha sido también parte de su formación artística. Su&nbsp;experiencia en México dio un giro en su vida hace dos años, el universo del arte ha sido&nbsp;siempre el motor que impulsó ese cambio.&nbsp;Todo empezó en Oaxaca, en conjunto con la galería Parallel Oaxaca. De ese proyecto, dos de</div><div>sus colegas artistas de Canadá hicieron “algo un poco extraño”. Pues según recuerda,&nbsp;“construyeron un cristal grande en el techo de la galería como una forma de experimento para&nbsp;ver que era posible en la ciudad en lo que a arquitectura auto organizada se refería, pero&nbsp;también burlándose de cómo muchos museos gastan tanto dinero en los exteriores de sus&nbsp;edificios con ideas arquitectónicas tan fantásticas que muy a menudo se quedan sin dinero&nbsp;como para continuar con las operaciones internas”. Ese fue el peldaño de la escalera que&nbsp;construye con este país.</div><div><br></div><div>El segundo paso se cimentó hace un año. Participó en la Material Art Fair de la Ciudad de&nbsp;México, una alternativa a los shows comerciales grandes en la materia. “Ahí pude conocer a&nbsp;mucha gente de México y alrededor de Centro América y sentí que estaba participando en&nbsp;algo muy especial, así que espero regresar nuevamente en febrero y presentar un stand&nbsp;nuevamente”.</div><div><br></div><div><span style="font-weight: bold;">Colores mexicanos, fábrica de inspiración audiovisual.</span></div><div>La creatividad como parte inherente de la naturaleza mexicana está impresa en las manos de&nbsp;artesanos, familias y tradiciones, o al menos así lo ve McGovern, quien cree que: “la tradición&nbsp;de crear arte y artesanías se ha vuelto muy presente en la escena contemporánea del arte, de&nbsp;tal forma que muchísima gente en México que son, digamos, familias de artesanos, nacieron&nbsp;con la idea de ser creativos sin la necesidad de esperar a que ninguna situación exista para&nbsp;serlo, es solo la forma en que son.”</div><div><br></div><div style="text-align: center; "><span style="font-style: italic; font-weight: bold; color: rgb(102, 102, 102);">“La creatividad esta muy integrada en la vida diaria en muchas partes de México.”&nbsp;</span></div><div style="text-align: center; "><span style="font-style: italic; font-weight: bold; color: rgb(102, 102, 102);"><br></span></div><div style="">Además, el salvaguarda del arte canadiense interpreta las tradiciones mexicanas como una&nbsp;<span style="font-size: 1rem;">forma única de aproximarse al arte. Aquí, precisa, lo individual se antepone a las expectativas&nbsp;</span><span style="font-size: 1rem;">y el ser creativo se convierte en prioridad ante seguir un sistema lógico de producción, y es&nbsp;</span><span style="font-size: 1rem;">tanta su sorpresa que pretende estrechar lazos entre artistas mexicanos y canadienses para&nbsp;</span><span style="font-size: 1rem;">ofrecer un acercamiento diferente a aquello que define como “ser creativo” .</span></div><div style=""><span style="font-weight: bold; font-size: 1rem;"><br></span></div><div style=""><span style="font-weight: bold; font-size: 1rem;">Manual para ver el Jazz.</span></div><div style=""><span style="font-size: 1rem;">Como curador de las piezas de video que conforman la exposición “Triada, Arte con Swing”,&nbsp;Scott tuvo un acercamiento con El Centro Cultural Casa Baltazar para entender y&nbsp;conceptualizar las ideas sobre lo que es el Jazz.&nbsp;De igual forma, Scott piensa imprimir el sello de la casa en el material que presente, pues&nbsp;además de ser invitado a esta exhibición, su ciudad de origen en Canadá se caracteriza por&nbsp;ser una de las capitales mundiales para el estudio de la Teoría de la improvisación, por lo que&nbsp;espera que la gente que vea la producción audiovisual como parte de la exposición sea&nbsp;sensible ante el Jazz y hacia el resto del festival.</span></div><div><br></div><div><span style="font-weight: bold;">Perseverancia, el escudo ante el mundo moderno.</span></div><div>Tropezar. Fracasar. Intentar todo de nuevo. Para Scott McGovern la vida de quien quiere ceder&nbsp;su vida al arte tendría que tener a la perseverancia como punto de partida, pues si de algo está&nbsp;seguro es de que los retos son parte del día a día en el camino de los artistas.</div><div><br></div><div>Ese el consejo de Scott para los colegas que comienzan a andar apenas por el sendero que él&nbsp;lleva bastante caminado.&nbsp; Incluso si ciertas cosas son fáciles, los artistas están llenos de retos&nbsp;que pueden ser diferentes cosas: pueden ser desafíos financieros, o de forma logística en un&nbsp;negocio acerca de cómo haces que las cosas realmente sucedan y funcionen.”&nbsp;Pero los muros en una vida dedicada al arte no son sólo técnicos, algunos provienen del&nbsp;<span style="font-size: 1rem;">interior, como la creación de piezas.&nbsp;</span></div><div><br></div><div style="text-align: center; "><span style="font-style: italic; font-weight: bold; color: rgb(102, 102, 102);">“Un artista piensa acerca de su obra y cuánto de si mismos o su alma están dispuestos a&nbsp;poner en sus obras de arte para que sea consumido por la gente.”</span></div>
\.


--
-- TOC entry 3203 (class 0 OID 17242)
-- Dependencies: 207
-- Data for Name: ruta; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ruta (id_ruta, nombre, calle, cp, colonia, ciudad, num_ext, num_int, coordenadas) FROM stdin;
19011208	Teatro Ignacio de la Llave	Colon Oriente	94300	Centro	Orizaba			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.8675787059315!2d-97.10697838553615!3d18.84855488721883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c502a500000001%3A0xb8a8d99d9fd1639d!2sTeatro+Ignacio+De+La+Llave!5e0!3m2!1ses-419!2smx!4v1527150316347" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011209	Cerro del Borrego		94300		Orizaba			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.9172334825826!2d-97.11902428553618!3d18.846347587220105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c502c73f9bdba7%3A0xf8273f6fae6ff948!2sCerro+del+Borrego!5e0!3m2!1ses-419!2smx!4v1527152285979" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011201	Nuestro Señor del Calvario	Norte 4	94300	Centro	Orizaba,Ver	02		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.852525720757!2d-97.1055916851023!3d18.849223987218455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa88724bf592ef45d!2sNuestro+Se%C3%B1or+del+Calvario!5e0!3m2!1ses-419!2smx!4v1526452627717" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011202	San Miguel Arcángel "Catedral"	Fco. I. Madero Norte	94300	Centro	Orizaba,Ver	88		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.844163228672!2d-97.10708958510234!3d18.849595687218255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x90b54a0e83b5d7c!2sCatedral+de+San+Miguel+Arc%C3%A1ngel!5e0!3m2!1ses-419!2smx!4v1526454085557" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011200	Nuestra Señora del Carmen	Oriente 4 y Sur 9	94300	Centro	Orizaba, Ver			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.876874358883!2d-97.10338688510234!3d18.84814168721909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1424307be7ebd0d4!2sNuestra+Se%C3%B1ora+del+Carmen!5e0!3m2!1ses-419!2smx!4v1526453813707" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011203	Iglesia de San José	Poniente 7	94300	Centro	Orizaba			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2670.019080160717!2d-97.10783514530134!3d18.843681792209225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c502bb8aab4365%3A0xd84ce9b32987b02c!2sParroquia+San+Jos%C3%A9+de+Gracia!5e0!3m2!1ses-419!2smx!4v1527149873027" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011204	Iglesia de San Juan de Dios	Oriente 10	94300	Centro	Orizaba	1		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.9655871198697!2d-97.10510778510236!3d18.84419788722133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4855e452cf8036f9!2sSan+Juan+de+Dios!5e0!3m2!1ses-419!2smx!4v1527150008556" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011205	Nuestra Señora de los Dolores	Sur 13	94300	Centro	Orizaba	239		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.8831845825384!2d-97.10112498510233!3d18.847861187219223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b91e3384aee7de0!2sIglesia+de+Nuestra+Se%C3%B1ora+de+los+Dolores!5e0!3m2!1ses-419!2smx!4v1527150131216" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011206	Poliforum Mier y Pesado	Oriente 6	94300		Orizaba			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.8745144694612!2d-97.09128858553618!3d18.848246587218988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4fd59a10e3a5b%3A0x2a8699f68d32cfbf!2sPoliforum+Mier+y+Pesado!5e0!3m2!1ses-419!2smx!4v1527150193044" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
19011207	Palacio de Hierro	Fco. I. Madero Norte	94300	Centro	Orizaba			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.841231706746!2d-97.1081922855361!3d18.849725987218072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c502a6325131bd%3A0xb2f1733e46c41fd!2sPalacio+de+Hierro!5e0!3m2!1ses-419!2smx!4v1527150236966" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
\.


--
-- TOC entry 3204 (class 0 OID 17248)
-- Dependencies: 208
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: -
--

COPY usuario (id_usuario, usuario, "contraseña", nombre, ap_paterno, ap_materno, email, direccion, telefono) FROM stdin;
15011201	luchotrucho	luchobebe21	Luis Gilberto	Sánchez	Amador	LuchoTrucho@laweb.com	Ixtac 26	2721116578
15011203	elactordiegoluna	contraseña123	Carlos Alejandro	Diego	Luna	masterchiefxbox@hotmail.es	Norte 10 182	1234456877
15011202	luisrivasd	BarcoAzul24	Luis	Rivas	Durán	luisrivasd@gmail.com	Oriente 624	2721073524
15011205	iavnelterrible	lookatthisbruh	Iván	Cabrera	Rodriguez	pcmasterrace@discord.com	Queretaro 298	1271458975
15011207	adolfhit	deutschland	Adolfo	Meza	Romero	Adolf@Germany.du	Berlín 23	2154789652
15011206	jomoloco	jomopassword	Jonathan	Martínez	Ocampo	DolceCreppe@gmail.com	Amatlan 28	1274954123
15011209	eljudew	kravmaga	Jesus Raul	Sanchez	Something	RuloTrulo@hotmail.com	Oriente 21 452	2135478965
15011208	peterlaanguila	philosophyrlz	Pedro de Jesús	Palafox	Algo	Peter@infraweb.org	Roma 283	4578965321
15011204	anabananna	dontdeadopeninside	Ana	Moreno	Soto	Ana235@cona.com	El Espinal 283	6547854124
15011210	paupau3	paoloh369	Paolo	Hurtado		paolohurtado@rusia.com	Rusia 2018	018004567342
15011200	renenvt	Rhenybaby19	Rene Jesus	Navarrete	Tenco	renenvt@gmail.com	Cauville Lote 2	2721083209
\.


--
-- TOC entry 3046 (class 2606 OID 17258)
-- Name: administrador Administrador_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY administrador
    ADD CONSTRAINT "Administrador_pkey" PRIMARY KEY (id_administrador);


--
-- TOC entry 3048 (class 2606 OID 17260)
-- Name: caja Caja_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY caja
    ADD CONSTRAINT "Caja_pkey" PRIMARY KEY (id_caja);


--
-- TOC entry 3052 (class 2606 OID 17262)
-- Name: cartelera Cartelera_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY cartelera
    ADD CONSTRAINT "Cartelera_pkey" PRIMARY KEY (id_cartelera);


--
-- TOC entry 3054 (class 2606 OID 17264)
-- Name: colaborador Colaborador_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY colaborador
    ADD CONSTRAINT "Colaborador_pkey" PRIMARY KEY (id_colaborador);


--
-- TOC entry 3056 (class 2606 OID 17266)
-- Name: evento Evento_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY evento
    ADD CONSTRAINT "Evento_pkey" PRIMARY KEY (id_evento);


--
-- TOC entry 3062 (class 2606 OID 17268)
-- Name: obra Obra_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY obra
    ADD CONSTRAINT "Obra_pkey" PRIMARY KEY (id_obra);


--
-- TOC entry 3066 (class 2606 OID 17270)
-- Name: reseña Reseña_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY "reseña"
    ADD CONSTRAINT "Reseña_pkey" PRIMARY KEY ("id_reseña");


--
-- TOC entry 3068 (class 2606 OID 17272)
-- Name: ruta Ruta_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ruta
    ADD CONSTRAINT "Ruta_pkey" PRIMARY KEY (id_ruta);


--
-- TOC entry 3070 (class 2606 OID 17274)
-- Name: usuario Usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT "Usuario_pkey" PRIMARY KEY (id_usuario);


--
-- TOC entry 3064 (class 2606 OID 17276)
-- Name: ordenes Venta_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ordenes
    ADD CONSTRAINT "Venta_pkey" PRIMARY KEY (id_orden);


--
-- TOC entry 3050 (class 2606 OID 17278)
-- Name: carrito carrito_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY carrito
    ADD CONSTRAINT carrito_pkey PRIMARY KEY (id_obra, id_usuario);


--
-- TOC entry 3058 (class 2606 OID 17280)
-- Name: galeria galeria_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY galeria
    ADD CONSTRAINT galeria_pkey PRIMARY KEY (id_imagen);


--
-- TOC entry 3060 (class 2606 OID 17282)
-- Name: newsletter newsletter_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY newsletter
    ADD CONSTRAINT newsletter_pkey PRIMARY KEY (id_newsletter);


-- Completed on 2018-05-31 19:05:25 CDT

--
-- PostgreSQL database dump complete
--

