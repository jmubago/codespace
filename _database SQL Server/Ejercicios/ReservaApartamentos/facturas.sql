
CREATE TABLE facturas_ID (
	id INT IDENTITY (1,1) NOT NULL
	, fecha DATE NOT NULL
	, importe SMALLMONEY NOT NULL
	, IVA TINYINT NOT NULL
	, linea_factura VARCHAR (100) NOT NULL
	, clienteID INT NOT NULL
	, CONSTRAINT PK_facturas_facturasID PRIMARY KEY CLUSTERED (id)
);