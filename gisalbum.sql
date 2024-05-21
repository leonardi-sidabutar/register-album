USE [gisalbum]
GO
/****** Object:  Table [dbo].[gis_blok]    Script Date: 21/05/2024 11:20:29 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[gis_blok](
	[id] [int] NOT NULL,
	[kode_blok] [varchar](10) NULL,
	[afdeling] [tinyint] NULL,
	[kode_unit] [varchar](10) NULL,
	[created_at] [smalldatetime] NULL,
	[created_by] [varchar](10) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[gis_history_upload]    Script Date: 21/05/2024 11:20:29 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[gis_history_upload](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[bulan] [varchar](10) NULL,
	[tahun] [varchar](4) NULL,
	[id_tree] [bigint] NULL,
	[kode_ptpn] [varchar](10) NULL,
	[kode_unit] [varchar](10) NULL,
	[afdeling] [tinyint] NULL,
	[blok] [varchar](10) NULL,
	[kondisi] [varchar](50) NULL,
	[file_path] [varchar](253) NULL,
	[created_at] [smalldatetime] NULL,
	[created_by] [varchar](20) NULL,
 CONSTRAINT [PK_gis_history_upload] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[kebun]    Script Date: 21/05/2024 11:20:29 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[kebun](
	[company] [varchar](4) NULL,
	[regional] [varchar](20) NULL,
	[ptpn] [varchar](20) NULL,
	[kode_kebun] [varchar](4) NULL,
	[nama_kebun] [varchar](255) NULL,
	[id] [int] IDENTITY(1,1) NOT NULL,
 CONSTRAINT [PK_kebun_id] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 21/05/2024 11:20:29 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nik_sap] [nvarchar](10) NULL,
	[fullname] [varchar](150) NULL,
	[username] [varchar](50) NULL,
	[password] [varchar](254) NULL,
	[nickname] [varchar](100) NULL,
	[company_code] [varchar](10) NULL,
	[kebun] [varchar](150) NULL,
	[namakebun] [varchar](250) NULL,
	[afdeling] [varchar](100) NULL,
	[namaafdeling] [varchar](150) NULL,
	[kode_kebun] [varchar](10) NULL,
	[kode_ptpn] [varchar](10) NULL,
	[kode_afdeling] [varchar](15) NULL,
	[token] [text] NULL,
	[jabatan] [varchar](100) NULL,
	[no_hp] [varchar](20) NULL,
	[email] [varchar](100) NULL,
	[regional] [varchar](20) NULL,
 CONSTRAINT [PK_users] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
