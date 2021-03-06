PGDMP     .    %                w         	   franquiax    11.3    11.3 $    +           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            ,           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            -           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            .           1262    42015 	   franquiax    DATABASE     �   CREATE DATABASE franquiax WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';
    DROP DATABASE franquiax;
             postgres    false            �            1259    42046    failed_jobs    TABLE     �   CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         postgres    false            �            1259    42044    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public       postgres    false    202            /           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
            public       postgres    false    201            �            1259    42083    jogos    TABLE     n  CREATE TABLE public.jogos (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    nome character varying(255) NOT NULL,
    data character varying(255) NOT NULL,
    console character varying(255) NOT NULL,
    empresa character varying(255) NOT NULL,
    resumo character varying(800) NOT NULL
);
    DROP TABLE public.jogos;
       public         postgres    false            �            1259    42081    jogos_id_seq    SEQUENCE     u   CREATE SEQUENCE public.jogos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.jogos_id_seq;
       public       postgres    false    204            0           0    0    jogos_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.jogos_id_seq OWNED BY public.jogos.id;
            public       postgres    false    203            �            1259    42018 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false            �            1259    42016    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    197            1           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
            public       postgres    false    196            �            1259    42037    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         postgres    false            �            1259    42026    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         postgres    false            �            1259    42024    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    199            2           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
            public       postgres    false    198            �
           2604    42049    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    201    202    202            �
           2604    42086    jogos id    DEFAULT     d   ALTER TABLE ONLY public.jogos ALTER COLUMN id SET DEFAULT nextval('public.jogos_id_seq'::regclass);
 7   ALTER TABLE public.jogos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    203    204    204            �
           2604    42021    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    196    197    197            �
           2604    42029    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    199    198    199            &          0    42046    failed_jobs 
   TABLE DATA               [   COPY public.failed_jobs (id, connection, queue, payload, exception, failed_at) FROM stdin;
    public       postgres    false    202   �&       (          0    42083    jogos 
   TABLE DATA               a   COPY public.jogos (id, created_at, updated_at, nome, data, console, empresa, resumo) FROM stdin;
    public       postgres    false    204   �&       !          0    42018 
   migrations 
   TABLE DATA               :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       postgres    false    197   '       $          0    42037    password_resets 
   TABLE DATA               C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public       postgres    false    200   �'       #          0    42026    users 
   TABLE DATA               u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public       postgres    false    199   -(       3           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
            public       postgres    false    201            4           0    0    jogos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.jogos_id_seq', 11, true);
            public       postgres    false    203            5           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 6, true);
            public       postgres    false    196            6           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 2, true);
            public       postgres    false    198            �
           2606    42055    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public         postgres    false    202            �
           2606    42091    jogos jogos_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.jogos
    ADD CONSTRAINT jogos_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.jogos DROP CONSTRAINT jogos_pkey;
       public         postgres    false    204            �
           2606    42023    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public         postgres    false    197            �
           2606    42036    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public         postgres    false    199            �
           2606    42034    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public         postgres    false    199            �
           1259    42043    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public         postgres    false    200            &      x������ � �      (      x������ � �      !   �   x�m��
�0����0Ҥ�t�"��Eq*m�ןU��CN�O�t�F�ļG�ICQydMYJ�V�b�!�gL�$�ZZbk2��Rw�\�m�Y�85�>���@��Ǘx�_H�ZAO#�=h��Cf�{���  �O�      $   x   x�K+J�KN-N�OO�)K�wH�M���K���T1�T14P���r.�����1KruL*w*��*sI��0qNt1�	�����N����5��(��420��54�5�P02�22�2������� T�!�      #   �   x�m�AO�0 F���؁뺶��q�X�� n&�]ji����D������1�}�K^�ȼ8I�K��j�qn�Z��tJ�s@p��OK�n��t�������]���,_zl��VI�Y=d�b[ҋO1YN	��xB���	����w�u�Tx�z�\껟�U�m�T�^���2Åq�.^��*��_�m�����Mt��7����/��v���Q�0�`|���~�JR;     