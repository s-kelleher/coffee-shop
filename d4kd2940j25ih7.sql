-- Adminer 4.8.1 PostgreSQL 14.2 (Ubuntu 14.2-1.pgdg20.04+1+b1) dump

DROP TABLE IF EXISTS "products";
DROP SEQUENCE IF EXISTS products_product_id_seq;
CREATE SEQUENCE products_product_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."products" (
    "product_id" integer DEFAULT nextval('products_product_id_seq') NOT NULL,
    "product_name" character varying NOT NULL,
    "product_price" money NOT NULL,
    CONSTRAINT "products_pkey" PRIMARY KEY ("product_id")
) WITH (oids = false);

INSERT INTO "products" ("product_id", "product_name", "product_price") VALUES
(3,	'Rhinoware Hand Grinder',	'$45.00'),
(4,	'Soma coffee 250g bag',	'$14.00'),
(5,	'Sage 35mm Tamp',	'$40.00');

DROP TABLE IF EXISTS "users";
DROP SEQUENCE IF EXISTS users_user_id_seq;
CREATE SEQUENCE users_user_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."users" (
    "user_id" integer DEFAULT nextval('users_user_id_seq') NOT NULL,
    "username" character varying(60) NOT NULL,
    "password" character varying(60) NOT NULL,
    CONSTRAINT "users_pkey" PRIMARY KEY ("user_id")
) WITH (oids = false);

INSERT INTO "users" ("user_id", "username", "password") VALUES
(1,	'user',	'1234'),
(2,	'admin',	'1234');

-- 2022-05-01 20:26:38.041209+00
