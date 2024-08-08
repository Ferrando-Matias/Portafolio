using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HerenciaEjemplo
{
    internal interface IEmpleado
    {
        string Nombre { get; set; }
        int Id { get; set; }
        double SalarioBase { get; set; }

        double CalcularSalario();
        void MostrarInformacion();
        double CalcularBonificacion();
    }
}
